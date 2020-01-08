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

Route::get('/clientes', 'ClienteController@index');

Route::resource('/control_clientes', 'ControlClienteController')->middleware('auth');;
Route::resource('/control_facturas', 'ControlFacturaController')->middleware('auth');;

Route::get('/control_clientes/{id}/confirmDelete', 'ControlClienteController@confirmDelete');
Route::get('/control_facturas/{id}/confirmDelete', 'ControlFacturaController@confirmDelete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
