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

Route::get('/', ['as' => 'welcome', 'uses' => 'SubjectsController@index']);
Auth::routes();


Route::group(['middleware' => 'auth'], function () {

	Route::group(['middleware' => 'admin'], function () {
		Route::get('subjects/admin', ['as' => 'subjects.admin', 'uses' => 'SubjectsController@admin']);
		Route::resource('subjects', 'SubjectsController', ['except' => ['show']]);
	});

	Route::get('home', ['as' => 'home', 'uses' => 'RequestsController@index']);
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::resource('protocols', 'RequestsController', ['except' => ['show']]);
});

