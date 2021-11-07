@extends('adminlte::page')

@section('title', 'Reporte - mapa')

@section('content_header')

@stop

@section('content')


<html>
  <head>
    <title>Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
  </head>
  <form action="ejemplo.php" method="get">
    <p>lat: <input type="number" name="lat"></p>
    <p>lng: <input type="number" name="lng"></p>
   
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
  </form>
    
    <body >
      <h2>ga</h2>

      <div id="map"></div>
  
      <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
      
  
    
    
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeEsCbkqHxi0EwxEmkeqwOR1_P8qivMxI&callback=initMap&v=weekly&channel=2"
        async
      ></script>
    </body>
  
  
</html>






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