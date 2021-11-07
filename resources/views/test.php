


<form action="ejemplo.php" method="get">
  <p>lat: <input type="number" name="lat"></p>
  <p>lng: <input type="number" name="lng"></p>
 
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
</form>

<?php



$exif = exif_read_data("IMG_20211106_103303.jpg"); $lon = getGps($exif["GPSLongitude"], $exif['GPSLongitudeRef']); $lat = getGps($exif["GPSLatitude"], $exif['GPSLatitudeRef']); var_dump($lat, $lon);


function getGps($exifCoord, $hemi) { $degrees = count($exifCoord) > 0 ? gps2Num($exifCoord[0]) : 0; $minutes = count($exifCoord) > 1 ? gps2Num($exifCoord[1]) : 0; $seconds = count($exifCoord) > 2 ? gps2Num($exifCoord[2]) : 0; $flip = ($hemi == 'W' or $hemi == 'S') ? -1 : 1; return $flip * ($degrees + $minutes / 60 + $seconds / 3600); } function gps2Num($coordPart) { $parts = explode('/', $coordPart); if (count($parts) <= 0) return 0; if (count($parts) == 1) return $parts[0]; return floatval($parts[0]) / floatval($parts[1]); }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
  
  </head>
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    

	
	
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeEsCbkqHxi0EwxEmkeqwOR1_P8qivMxI&callback=initMap&v=weekly&channel=2"
      async
    ></script>
  </body>
</html>






<script>
function initMap() {
  const marcador = { lat: -16.515892972222, lng:-68.128947972222 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 14,
    center: marcador,
  });
  const marker = new google.maps.Marker({
    position: marcador,
    map: map,
  });
}
</script>

<style>
/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
#map {
  height: 100%;
}

/* Optional: Makes the sample page fill the window. */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

</style>

