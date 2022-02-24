@extends('adminlte::page')

@section('title', 'animals')

@section('content_header')
    <h1>Editar animals</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('animal.update', $animal) }}" novalidate>

                @csrf
                @method('PATCH')

                <h5>Nombre:</h5>
                <input type="text" name="nombre" value="{{ $animal->nombre }}" class="focus border-primary  form-control">

                <div class="form-group">
                    <h5>Tipo:</h5>
                    <select name="tipo" id="select-tipo" class="focus border-primary  form-control">
                        <option>Elegir una Opcion</option>
                        <option value="Anfibio">Anfibio</option>
                        <option value="Aves">Aves</option>
                        <option value="Mamífero">Mamífero</option>
                        <option value="Pez">Pez</option>
                        <option value="Roedor">Roedor</option>
                        <option value="Reptil">Reptil</option>
                    </select>

                    @error('sexo')
                        <p>DEBE INGRESAR BIEN SU SEXO</p>
                    @enderror
                </div>

                <h5>Nombre Cientifico:</h5>
                <input type="text" name="nombre_cientifico" value="{{ $animal->nombre_cientifico }}"
                    class="focus border-primary  form-control">

                @error('nombre')
                    <p>DEBE INGRESAR BIEN EL NOMBRE</p>
                @enderror



                <h5>Orden:</h5>
                <input type="text" name="orden" value="{{ $animal->orden }}" class="focus border-primary  form-control">



                <h5>Familia:</h5>
                <input type="text" name="familia" value="{{ $animal->familia }}" class="focus border-primary  form-control">




                <br>
                <br>

                <button class="btn btn-danger btn-sm" type="submit">Guardar</button>
                <a href="{{ route('animals.index') }}" class="btn btn-warning text-white btn-sm">Volver</a>
            </form>

        </div>
    </div>
@stop
