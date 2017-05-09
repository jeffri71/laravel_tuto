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
/*Controladores*/
Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
Route::resource('movie','MovieController');
/*Rutas Basicas*/
Route::get('prueba', function(){
	return "hola desde rweb.php xD!";
});

Route::get('nombre/{nombre}', function($nombre){
	return "mi nombre es: ".$nombre;
});

Route::get('edad/{edad}', function($edad){
	return "mi edad es: ".$edad;
});

Route::get('edad2/{edad?}', function($edad=20){
	return "mi edad es: ".$edad;
});

Route::get('/', function () {
    return view('welcome');
});
