@extends('adminlte::page')

@section('content_header')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
        <title>Mapa</title>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <link rel='stylesheet' href='https://yui.yahooapis.com/pure/0.6.0/pure-min.css'>
    </head>
@stop

@section('content')

    <!--

                                                                                                                                                                                                        -->




    <div id="map">

    </div>
    <a href="{{ route('reportes.index') }}" class="btn btn-warning text-white btn-sm">Volver</a>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeEsCbkqHxi0EwxEmkeqwOR1_P8qivMxI&callback=initMap&v=weekly&channel=2"
        async></script>

@stop

<script>
    function initMap() {
        const marcador = {
            lat: {{ $reporte->latitud }},
            lng: {{ $reporte->longitud }},
        };


        const image = {
            url: "{{ asset('img/tucan.jpg') }}",

            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(25, 25)
        };

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: marcador,


        });
        const marker = new google.maps.Marker({
            position: marcador,
            map: map,
            icon: image,
            title: 'Oso',



        });

    }
</script>



<style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 500px;
        margin: 10px;
        padding: 0px;
        background: #ffca66;
        border: solid #000;
        border-top-width: 1px;
        border-left-width: 2px;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
        background: #ffca66;
        height: 0;
        margin: 0;
        padding: 0;
    }

</style>
