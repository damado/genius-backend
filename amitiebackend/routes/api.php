<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos', 'ProductoController');
Route::resource('suscriptores', 'SuscriptorController');
Route::get('productos/{id}/imagenes', 'ProductoController@imagenes');
Route::get('suscriptores/busqueda/{mail}', 'SuscriptorController@buscarPorMail');
Route::post('contacto', 'ContactoController@send');
Route::resource('tipos_productos', 'TipoProductoController');
Route::get('tipos_productos/{id}/productos', 'TipoProductoController@productos');
Route::get('ultimos_productos', 'ProductoController@ultimosCincoProductos');