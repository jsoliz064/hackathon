<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AnimalController;
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
Route::get('animal/mapa/show/{animal}',[AnimalController::class,'showMapa'])->name('animal.mapa');
Route::resource('reporte', App\Http\Controllers\ReporteController::class);