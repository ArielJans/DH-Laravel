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
    return view('questionrace.index');
})->name('questionrace.index');

Route::get('/ranking', 'RankingController@listar')->name('questionrace.ranking');


Route::get('/juego', 'JuegoController@traerDatos')->middleware('auth');

Route::post('/juego/next', 'JuegoController@verificacion');

//LISTAR PREGUNTAS Y RESPUESTAS
Route::get('/preguntas', 'PreguntasController@index')->middleware('admin');

//AGREGAR PREGUNTAS Y RESPUESTAS
//mostrar formulario agregar
Route::get('/preguntas/agregar', 'PreguntasController@create');
//procesar formulario agregar
Route::post('/preguntas/agregar', 'PreguntasController@store');

//MODIFICAR PREGUNTAS
//mostrar formulario editar
Route::get('/preguntas/modificar/{id}', 'PreguntasController@edit')->middleware('admin');
//procesar formulario editar
Route::post('/preguntas/modificar', 'PreguntasController@update')->middleware('admin');

//ELIMINAR PREGUNTAS
Route::get('/preguntas/eliminar/{id}', 'PreguntasController@destroy')->middleware('admin');

//MODIFICAR RESPUESTAS
//mostrar formulario editar
Route::get('/respuestas/modificar/{id}', 'RespuestasController@edit')->middleware('admin');
//procesar formulario editar
Route::post('/respuestas/modificar', 'RespuestasController@update')->middleware('admin');

//ELIMINAR RESPUESTAS
Route::get('/respuestas/eliminar/{id}', 'RespuestasController@destroy')->middleware('admin');

//PANEL ADMINISTRADOR
Route::get('/admin', function () {
    return view('questionrace.admin.panel');
})->middleware('admin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
