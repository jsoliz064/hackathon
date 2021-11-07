
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
	<link href="login.css"   rel="stylesheet" type="text/css" >
        <title> Iniciar sesion </title>
</head>   
<body> 


@extends('adminlte::page')

@section('title', 'tipos')

@section('content_header')
    <h1>Registrar tipo</h1>
@stop

@section('content')



<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('tipos.store')}}" novalidate >

            @csrf
            <h5>Tipo:</h5>
            <input type="text"  name="nombre"  class="focus border-primary  form-control">
            @error('nombre')
                <p></p>
            @enderror


            
            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>

            <a href="{{route('tipos.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>

</body>

</html>
@stop

@section('css')

@stop

@section('js')

@stop