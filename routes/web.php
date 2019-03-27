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

use App\Http\Middleware\Admin;

Route::get('/', 'UserController@prueba')->name('/');
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/usuarios', 'UserController@index')->name('users.index');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/usuarios/detalles/{id}', 'UserController@show')->where('id', '[0-9]+')->name('users.show');
Auth::routes();

//Route::get('/prueba', 'UserController@prueba');

Auth::routes();
Route::get('/torneos', 'TorneoController@index')->name('torneos');
Route::get('/home', 'HomeController@dashboard')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('indexdashboard');

Route::post('torneos', 'TorneoUserController@store');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('crearTorneo', 'TorneoController@create')->name('crearTorneo')->middleware(Admin::class);
Route::post('crearTorneo', 'TorneoController@store');

Route::get('/editarTorneo/{torneo_id}', 'TorneoController@edit')->middleware(Admin::class);

Route::post('/editarTorneo', 'TorneoController@update')->name('editarTorneo');

Route::get('/inscritos/{torneo_id}','TorneoUserController@show')->name('inscritos')->middleware(Admin::class);
Route::get('/change/{torneo_id}','TorneoController@change')->name('change')->middleware(Admin::class);
Route::get('/borrarTorneo/{torneo_id}','TorneoController@destroy')->name('borrarTorneo')->middleware(Admin::class);

Route::post('/drop','TorneoUserController@destroy');

