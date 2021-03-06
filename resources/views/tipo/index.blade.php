@extends('adminlte::page')

@section('title', 'Tipo')

@section('content_header')
  <h1>Tipos</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
        {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
        
          <a class="btn btn-primary btb-sm" href="{{route('tipos.create')}}">Registrar tipo</a>    
       
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <table class="table table-striped" id="tipoes" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
           
            <th scope="col" width="0%">Acciones</th>
            
            {{-- <th colspan=""></th> --}}
          </tr>
        </thead>
        
        <tbody>

          @foreach ($tipos as $tipo)
            <tr>
              <td>{{$tipo->id}}</td>
              <td>{{$tipo->nombre}}</td>
              
              <td >
                <form  action="{{route('tipos.destroy',$tipo)}}" method="post">
                    @csrf
                  @method('delete')
                   
                     
                    
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
  
</script>
@stop