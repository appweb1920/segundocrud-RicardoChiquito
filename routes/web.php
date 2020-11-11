<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datos', 'PiezasController@agregaPiezas');

Route::post('/envio', 'PiezasController@ListaDatos');

Route::get('/muestraDatos', 'PiezasController@muestraDatos');

Route::get('/editar/{id}', 'PiezasController@muestraEdicion');

Route::post('/editar/guardaEdicion', 'PiezasController@guardaEdicion');

