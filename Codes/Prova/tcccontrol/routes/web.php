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

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('professores', 'HomeController@professores')->name('home.professores');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('colegiado/alunos', 'AdminController@alunos')->name('colegiado.alunos');
	Route::get('colegiado/inserir', 'AdminController@inserir')->name('colegiado.inserir');
	Route::get('colegiado/store', 'AdminController@store')->name('colegiado.store');
	Route::resource('colegiado', 'AdminController', ['except' => ['show']]);
	Route::resource('user', 'UserController', ['except' => ['show']]);

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

