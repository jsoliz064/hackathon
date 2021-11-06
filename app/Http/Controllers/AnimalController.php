<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $animals=Animal::all();
        return view('animal.index',compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        date_default_timezone_set("America/La_Paz");
        $animals=Animal::create([
            'nombre'=>request('nombre'),
            'tipo'=>request('tipo'),
            'nombre_cientifico'=>request('nombre_cientifico'),
            'orden'=>request('orden'),
            'familia'=>request('familia'),
        ]);

       
        return redirect()->route('animal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
       
        
    }
    public function showReportes(Animal $animal)
    {
       
        $reportes=DB::table('reportes')->where('id_animal',$animal->id)->orderBy('created_at','desc')->get();
      
        return view('animal.showReportes',compact ('reportes','animal'));
    }
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        return view('animal.edit',compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        //
        date_default_timezone_set("America/La_Paz");
        $animal->nombre=$request->nombre;
        $animal->tipo=$request->tipo;
        $animal->nombre_cientifico=$request->nombre_cientifico;
        $animal->orden=$request->orden;
        $animal->familia=$request->familia;
        $animal->save();

       

        return redirect()->route('animal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        //
        $animal->delete();
        return redirect()->route('animal.index');
    }
}
