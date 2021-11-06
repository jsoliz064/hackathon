@extends('adminlte::page')

@section('title', 'animal - mapa')

@section('content_header')

@stop

@section('content')
<br>
@if(session('status'))
    <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
@endif
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
         {{--  <a class="nav-link" href="{{route('animals.show',$animal)}}">Detalles</a> --}}
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="#">mapa</a>
        </li>
      </ul>
    </div>

    <br>

    <h5 class="font-weight-bold px-2">Mapa</h5>
    <div class="card">
        <div class="card-body">
        <table class="table table-striped" id="reportes" >
            <thead>
            <tr>
                
               
                {{-- <th colspan=""></th> --}}
            </tr>
            </thead>
            
            <tbody>
                {{-- @foreach ($reportes as $reporte)
                <tr>
                <td>{{$reporte->id}}</td>
                <td>{{$animal->codigo}}</td>
                <td>{{DB::table('users')->where('id',$reporte->id_usuario)->value('name')}}</td>
                <td>{{$reporte->ruta}}</td>
                <td>{{$reporte->created_at}}</td>
                <td> 
                    <form  action="{{route('animals.destroyreporte',$animal)}}" method="post">
                      @csrf
                      @method('delete')
                        <a  class="btn btn-primary btn-sm" href="{{route('reportes.show',$reporte->id)}}">Ver</a>                  
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" 
                        value="{{$reporte->id}}" name="reporte">Quitar</button>
                    </form>
                </td>    
                </tr>
              @endforeach --}}
            </tbody> 
          </table>
        </div>
      </div>
</div>
@stop