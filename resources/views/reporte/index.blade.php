@extends('adminlte::page')

@section('title', 'Reporte')

@section('content_header')
  <h1>Reportes</h1>
@stop

      @section('content')
        <div class="card">
          <div class="card-header">
               
                <a class="btn btn-primary btb-sm" href="{{url('/excel')}}">Exportar reporte</a>    

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <table class="table table-striped" id="reportes" >
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">ID animal</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Latitud</th>
                  <th scope="col">Longitud</th>
                  <th scope="col">Descripcion</th>
                  {{--<th scope="col">Tipo</th>
                  <th scope="col">Nombre Cientifico</th>
                  <th scope="col">Orden</th>
                  <th scope="col">Familia</th>
                  <th scope="col" width="0%">Acciones</th>--}}
                  {{-- <th colspan=""></th> --}}
                </tr>
              </thead>
              
              <tbody>
      
                @foreach ($reportes as $reporte)
                  <tr>
                    
                    <td>{{$reporte->id}}</td>
                    <td>{{$reporte->id_animal}}</td>
                    <td>{{DB::table('users')->where('id',$reporte->id_user)->value('name')}}</td>
                  
                    <td>{{$reporte->latitud}}</td>
                    <td>{{$reporte->longitud}}</td>
                    <td>{{$reporte->descripcion}}</td>
                  {{-- <td>{{$reporte->tipo}}</td>
                    <td>{{$reporte->nombre_cientifico}}</td>
                    <td>{{$reporte->orden}}</td>
                    <td>{{$reporte->familia}}</td>--}}
                    <td >
                      <form  action="{{route('reportes.destroy',$reporte)}}" method="post">
                          @csrf
                        @method('delete')
                          <a  class="btn btn-primary btn-sm" href="{{route('reportes.show',$reporte)}}">Ver</a>  
                        
                        
                        
                          {{--  <a class="btn btn-info btn-sm" href="{{route('reporte.edit',$reporte)}}">Editar</a>  --}} 
                            
                            <a class="btn btn-info btn-sm" href="{{route('reportes.imagenes',$reporte)}}">Ver Imagenes</a>  
                            <a class="btn btn-info btn-sm" href="{{route('reportes.mapa',$reporte)}}">Ver mapa</a> 

                          
                          <button class="btn btn-danger btn-sm" onclick="return confirm('??ESTA SEGURO DE  BORRAR?')" 
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