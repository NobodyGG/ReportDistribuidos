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

Route::get('/', function () {
    return view('welcome');
});

// www.uatf.edu.bo/estudiantes/programar
//Route::get(url, controlador@metodo)[->name('nombre_ruta')];
/*Route::get('saludo', function (){ // localhost:8000/saludo
    return "<h1>Bienvenidos a la ruta con laravel</h1>";
});

// localhost:8000/persona/insertar
Route::get('persona/insertar', function(){
    return "Se inserto correctamente a la persona";
})->name('Persona.insertar');

// localhost:8000/persona/insertar/Pedro
Route::get('persona/insertar/{nombre}', function($nombre){
    return "Se inserto a la persona ".$nombre;
});

Route::get('persona/insertar/{nombre}/{edad}', function($nombre, $edad) {
  return "Se crea a la persona $nombre que tiene $edad ";
});

Route::get('admin', 'ControllerAdmin@index')->name('admin.index');

Route::get('admin/nuevo', 'ControllerAdmin@create');

Route::post('admin/guardar', 'ControllerAdmin@store');

Route::get('admin/tabla', 'ControllerAdmin@tabla');
*/

Route::get('persona', 'ControllerPersona@index');
