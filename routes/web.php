<?php
use App\Http\Controllers\MarcajeController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [MarcajeController::class, 'index']);

Route::post('estaciones', [MarcajeController::class, 'store'])->name('estaciones.store');//AGREGAR REGISTRO

Route::get('estaciones/{id}/edit', [MarcajeController::class, 'edit'])->name('estacion.edit');

Route::put('estaciones/{estacion}', [MarcajeController::class, 'update'])->name('estaciones.update');