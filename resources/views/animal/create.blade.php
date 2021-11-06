@extends('adminlte::page')

@section('title', 'animals')

@section('content_header')
    <h1>Registrar animal</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('animal.store')}}" novalidate >

            @csrf
            <h5>Nombre:</h5>
            <input type="text"  name="nombre"  class="focus border-primary  form-control">
            @error('nombre')
                <p></p>
            @enderror


            <div class="form-group">
                <h5>Tipo:</h5>
                <select name="tipo" id="select-tipo"  class="focus border-primary  form-control">
                    <option >Elegir una Opcion</option>
                    <option value="Anfibio">Anfibio</option>
                    <option value="Aves">Aves</option>
                    <option value="Mamífero">Mamífero</option>
                    <option value="Pez">Pez</option>
                    <option value="Roedor">Roedor</option>

                    <option value="Reptil">Reptil</option>

                </select>
    
                @error('tipo')
                    <p>DEBE INGRESAR BIEN EL TIPO</p>
                @enderror
             </div>

           

            <h5>Nombre Cientifico:</h5>
            <input type="text"  name="nombre_cientifico" class="focus border-primary  form-control" >
            @error('nombre_cientifico')
            <p>DEBE INGRESAR BIEN EL NOMBRE</p>
            @enderror

            <h5>Orden:</h5>
            <input type="text"  name="orden"  class="focus border-primary  form-control">
            @error('orden')
                <p></p>
            @enderror

            <h5>Familia:</h5>
            <input type="text"  name="familia"  class="focus border-primary  form-control">
            @error('familia')
                <p></p>
            @enderror

        
            <br>
            <br>
            
            <button  class="btn btn-danger btn-sm" type="submit">Registrar</button>

            <a href="{{route('animal.index')}}"class="btn btn-warning text-white btn-sm">Volver</a>
        </form>

    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop