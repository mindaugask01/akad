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

Route::get('/', 'PagesController@home')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('teachers', 'TeachersController');

Route::get('register', 'PagesController@register')->name('register.show');

Route::get('admin', 'AdminPagesController@dashboard')->name('admin');

Route::get('teachers/{id}/delete', 'TeachersController@delete')->name('teachers.delete');

Route::resource('modules', 'ModuleController');

Route::resource('grupes', 'GrupeController');

Route::resource('programos', 'ProgramaController');

Route::get('programos/{id}/delete', 'ProgramaController@delete')->name('programos.delete');

Route::get('grupes/{id}/delete', 'GrupeController@delete')->name('grupes.delete');

Route::get('modules/{id}/delete', 'ModuleController@delete')->name('modules.delete');

Route::resource('kruvis', 'KruvisController');

Route::resource('users', 'UserController');

Route::get('logout1', 'UserController@getLogout')->name('getLogout');

Route::get('kruvis/{id}', 'KruvisController@mano');

Route::resource('valandos', 'ValandosController');

Route::get('valandos/naujas/{id}', 'ValandosController@naujas')->name('valandos.naujas');






