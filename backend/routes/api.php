<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('espacio', 'EspacioController@mostrarDisponible');

Route::get('evento', 'EventoController@index');
Route::get('eventos/{evento}', 'EventoController@show');
Route::put('eventos/{evento}', 'EventoController@update');
Route::delete('eventos/{evento}', 'EventoController@delete');