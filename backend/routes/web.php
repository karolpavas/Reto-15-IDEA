<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\UsuarioController;
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
    return view('welcome');
});

Route::resource('espacio', EspacioController::class);
Route::resource('evento', EventoController::class);
Route::resource('horario', HorarioController::class);
Route::resource('usuario', UsuarioController::class);