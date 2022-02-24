<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ReporteController;
use App\Exports\ReportesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\userController;
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
    return Excel::download(new ReportesExport, 'reportes.xls');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('animals', App\Http\Controllers\AnimalController::class);
Route::get('animals/reportes/show/{animal}', [AnimalController::class, 'showReportes'])->name('animals.reporte');
Route::resource('reportes', App\Http\Controllers\ReporteController::class);
Route::get('reportes/mapa/show/{reporte}', [ReporteController::class, 'showMapa'])->name('reportes.mapa');
Route::get('reportes/imagen/show/{reporte}', [ReporteController::class, 'showImagen'])->name('reportes.imagenes');
Route::resource('imagens', App\Http\Controllers\ImagenController::class);
Route::resource('tipos', App\Http\Controllers\TipoController::class);
Route::get('user/profile/', [userController::class, 'show2'])->name('user.show');
Route::patch('user/update/', [userController::class, 'update2'])->name('user.update');
Route::resource('users', userController::class)->names('admin.users');
