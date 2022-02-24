<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Imagen;
use App\Models\Reporte;
use App\Models\Tipo;
use App\Models\User;
use Faker\Provider\Image;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);


        $animal1 = new Animal();
        $animal1->nombre = 'Tucan';
        $animal1->tipo = 'Ave';
        $animal1->nombre_cientifico = 'Ramfástidos';
        $animal1->orden = 'Piciformes';
        $animal1->familia = 'Ramphastidae';
        $animal1->save();


        $reporte1 = new Reporte();
        $reporte1->id_animal = 1;
        $reporte1->id_user = 1;
        $reporte1->latitud = '10.5545';
        $reporte1->longitud = '-85.45468';
        $reporte1->descripcion = 'tucan visto';
        $reporte1->save();

        $tipo1 = new Tipo();
        $tipo1->nombre = 'Anfibio';
        $tipo1->save();

        $tipo2 = new Tipo();
        $tipo2->nombre = 'Mamifero';
        $tipo2->save();
        $tipo3 = new Tipo();
        $tipo3->nombre = 'Ave';
        $tipo3->save();
        $tipo4 = new Tipo();
        $tipo4->nombre = 'Reptil';
        $tipo4->save();
        $tipo6 = new Tipo();
        $tipo6->nombre = 'Pez';
        $tipo6->save();

        $imagen1 = new Imagen();
        $imagen1->id_reporte = 1;
        $imagen1->url = 'img/tucan.png';
        $imagen1->save();
    }
}
