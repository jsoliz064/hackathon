

<<<<<<< HEAD
@section('content_header')

@stop

@section('content')


=======
>>>>>>> 71dd56aa5173e084e286a61cfb33641973d6e634
  <head>
    <title>Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
  
  </head>

<<<<<<< HEAD

    <div id="map"></div>
	
	
=======
>>>>>>> 71dd56aa5173e084e286a61cfb33641973d6e634
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeEsCbkqHxi0EwxEmkeqwOR1_P8qivMxI&callback=initMap&v=weekly&channel=2"
      async
    ></script>
<<<<<<< HEAD



=======
  </body>
>>>>>>> 71dd56aa5173e084e286a61cfb33641973d6e634
<script>
function initMap() {
  const marcador = { lat: {{$reporte->latitud}}, lng:{{$reporte->longitud}} };
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
