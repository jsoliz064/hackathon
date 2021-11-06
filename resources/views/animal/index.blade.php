@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
  <h1>Animales</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
        {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
        
          <a class="btn btn-primary btb-sm" href="{{url('/animal/create')}}">Registrar Animal</a>    
       
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <table class="table table-striped" id="clientes" >
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Nombre Cientifico</th>
            <th scope="col">Orden</th>
            <th scope="col">Familia</th>
            <th scope="col" width="0%">Acciones</th>
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($animals as $animal)
            <tr>
              <td>{{$animal->nombre}}</td>
              <td>{{$animal->tipo}}</td>
              <td>{{$animal->nombre_cientifico}}</td>
              <td>{{$animal->orden}}</td>
              <td>{{$animal->familia}}</td>
              <td >
                <form  action="{{route('animal.destroy',$animal)}}" method="post">
                    @csrf
                  @method('delete')
                    <a  class="btn btn-primary btn-sm" href="{{route('animal.show',$animal)}}">Ver</a>  
                  

                   
                      <a class="btn btn-info btn-sm" href="{{route('animal.edit',$animal)}}">Editar</a>                 
               

                    
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" 
                    value="Borrar">Eliminar</button>
                  

                </form>
              </td>    
            </tr>
          @endforeach
        </tbody> 

      </table>
    </div>
  </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
     $('#clientes').DataTable();
    } );
</script>
@stop