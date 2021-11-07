<form action="" method="post">
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<input type='text' name='searchAddress' class="form-control" placeholder='Enter address here' />
</div>
</div>
<div class="form-group">
<input type='submit' value='Find' class="btn btn-success" />
</div>
</div>
</form>

<?php
if($_POST) {
// get geocode address details
$geocodeData = getGeocodeData($_POST['searchAddress']);
if($geocodeData) {
$latitude = $geocodeData[0];
$longitude = $geocodeData[1];
$address = $geocodeData[2];
?>
<div id="gmap">Loading map...</div>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
<script type="text/javascript">
function init_map() {
var options = {
zoom: 14,
center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
mapTypeId: google.maps.MapTypeId.ROADMAP
};
map = new google.maps.Map($("#gmap")[0], options);
marker = new google.maps.Marker({
map: map,
position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
});
infowindow = new google.maps.InfoWindow({
content: "<?php echo $address; ?>"
});
google.maps.event.addListener(marker, "click", function () {
infowindow.open(map, marker);
});
infowindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', init_map);
</script>
<?php
} else {
echo "Incorrect details to show map!";
}
}

function getGeocodeData($address) {
$address = urlencode($address);
$googleMapUrl = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyBeEsCbkqHxi0EwxEmkeqwOR1_P8qivMxI";
$geocodeResponseData = file_get_contents($googleMapUrl);
$responseData = json_decode($geocodeResponseData, true);
if($responseData['status']=='OK') {
$latitude = isset($responseData['results'][0]['geometry']['location']['lat']) ? $responseData['results'][0]['geometry']['location']['lat'] : "";
$longitude = isset($responseData['results'][0]['geometry']['location']['lng']) ? $responseData['results'][0]['geometry']['location']['lng'] : "";
$formattedAddress = isset($responseData['results'][0]['formatted_address']) ? $responseData['results'][0]['formatted_address'] : "";
if($latitude && $longitude && $formattedAddress) {
$geocodeData = array();
array_push(
$geocodeData,
$latitude,
$longitude,
$formattedAddress
);
return $geocodeData;
} else {
return false;
}
} else {
echo "ERROR: {$responseData['status']}";
return false;
}
}
?>

<!---
<!DOCTYPE html>
<html>
  <head>
    <title>Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
  
 <!--- 
  </head>
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    
	<!---
	
	
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeEsCbkqHxi0EwxEmkeqwOR1_P8qivMxI&callback=initMap&v=weekly&channel=2"
      async
    ></script>
  </body>
</html>



<script>
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
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

--->