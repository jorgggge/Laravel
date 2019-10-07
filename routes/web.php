<?php

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

// LLamo el controlador dentro de la carpeta App\Http\Controllers
Route::get('/', "UserController@index");

Route::get('/Usuarios', function (){
	return "Hola Usuarios";
});

Route::get('/{id}', "UserController@Numero")->where('id','\d+');


