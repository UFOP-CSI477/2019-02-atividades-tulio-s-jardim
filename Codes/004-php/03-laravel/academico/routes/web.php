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

Route::get('/welcome', 'PaginasController@welcome');

Route::get('/', 'PaginasController@index');

Route::get('/listar', 'PaginasController@listar');

Route::get('/estados', 'EstadoController@index');

// Route::get('/cidades', 'CidadesController@index');
// Route::get('/cidades/incluir', 'CidadesController@create');
// Route::post('/cidades/salvar', 'CidadesController@store');
Route::resource('/cidades', 'CidadesController');

Route::get('/alunos', 'AlunosController@index');
