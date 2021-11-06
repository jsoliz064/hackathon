<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ReporteController;
use App\Exports\ReportesExport;
use Maatwebsite\Excel\Facades\Excel;
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
Route::get('/excel', function () {
    return Excel::download(new ReportesExport, 'reportes.xlsx');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('animals', App\Http\Controllers\AnimalController::class);
Route::get('animal/reporte/show/{animal}',[AnimalController::class,'showReportes'])->name('animal.reporte');
Route::resource('reportes', App\Http\Controllers\ReporteController::class);
Route::get('reporte/mapa/show/{reporte}',[ReporteController::class,'showMapa'])->name('reportes.mapa');
Route::get('reporte/imagen/show/{reporte}',[ReporteController::class,'showImagen'])->name('reportes.imagenes');
Route::resource('imagens', App\Http\Controllers\ImagenController::class);