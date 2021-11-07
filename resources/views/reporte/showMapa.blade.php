@extends('adminlte::page')

@section('title', 'Reporte - mapa')

@section('content_header')

@stop

@section('content')


  <head>
    <title>Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
  
  </head>


    <div id="map"></div>
	
	
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeEsCbkqHxi0EwxEmkeqwOR1_P8qivMxI&callback=initMap&v=weekly&channel=2"
      async
    ></script>



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


@stop