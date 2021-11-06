<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ImagenController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('animal', App\Http\Controllers\AnimalController::class);
Route::get('animal/reporte/show/{animal}',[AnimalController::class,'showReportes'])->name('animal.reporte');
Route::resource('reporte', App\Http\Controllers\ReporteController::class);
Route::get('reporte/mapa/show/{reporte}',[ReporteController::class,'showMapa'])->name('reporte.mapa');
Route::get('reporte/imagen/show/{reporte}',[ReporteController::class,'showImagen'])->name('reporte.imagen');
Route::resource('imagen', App\Http\Controllers\ImagenController::class);