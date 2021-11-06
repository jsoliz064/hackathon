@extends('adminlte::page')

@section('title', 'Imagenes')

@section('content_header')
    <h2 class="section_title">Imagenes</h2>
@stop

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <main class="main">
            @include('imagen.data')
        </main>
    
        <!--==================== SCROLL TOP ====================-->
            
    </body>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
@stop

@section('js')
<!--========== SCROLL REVEAL ==========-->
    
@stop
