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

Route::get('/', 'UserController@prueba');
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/usuarios', 'UserController@index')->name('users.index');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::get('/usuarios/detalles/{id}', 'UserController@show')->where('id', '[0-9]+')->name('users.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/prueba', 'UserController@prueba');
Route::get('/dashboard', 'HomeController@dashboard')->name('indexdashboard');

Auth::routes();
Route::get('/torneos', 'TorneoController@index')->name('torneos');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('torneos', 'TorneoUserController@store');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('crearTorneo', 'TorneoController@create')->name('crearTorneo');
Route::post('crearTorneo', 'TorneoController@store');
