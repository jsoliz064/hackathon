<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reportes=Reporte::all();
        return view('reporte.index',compact('reportes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        date_default_timezone_set("America/La_Paz");
        $reportes=Reporte::create([
            'id_animal'=>request('id_animal'),
            'latitud'=>request('latitud'),
            'longitud'=>request('longitud'),
            'descripcion'=>request('descripcion'),
            
        ]);

       
        return redirect()->route('reporte.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        //
    }
    public function showMapa(Reporte $reporte)
    {
       
       /*  $coordenadas=DB::table('reportes')->where('id_animal',$animal->id)->orderBy('created_at','desc')->get(); */
    
        return view('reporte.showMapa',compact ('reporte'));
    }

    public function showImagen(Reporte $reporte)
    {
       
      $imagens=DB::table('imagens')->where('id_reporte',$reporte->id)->orderBy('created_at','desc')->paginate(5);  
        return view('reporte.showImagen',compact ('reporte','imagens'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        $reporte->delete();
        return redirect()->route('reportes.index');
    }
}
