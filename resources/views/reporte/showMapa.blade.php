

@section('content_header')

@stop

@section('content')

<!--
<<<<<<< HEAD
>>>>>>> 71dd56aa5173e084e286a61cfb33641973d6e634
<<<<<<< HEAD
-->

  <head>
  	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <title>Mapa</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  </head>


    <div id="map">
	</div>

	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeEsCbkqHxi0EwxEmkeqwOR1_P8qivMxI&callback=initMap&v=weekly&channel=2"
      async
    ></script>
<!--	
<<<<<<< HEAD
=======
-->
  </body>
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
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
  height: 500px;
  margin: 10px;
  padding: 0px;
  background:#ffca66;
  border: solid #000;
  border-top-width: 1px;
  border-left-width: 2px;
}

/* Optional: Makes the sample page fill the window. */
html,
body {
  background:#ffca66;
  height: 0;
  margin: 0;
  padding: 0;
}

</style>
