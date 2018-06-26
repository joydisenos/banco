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

Auth::routes();



//cuenta usuario
Route::group(['middleware'=> 'auth'],function(){
	Route::get('/home', 'HomeController@index')->name('home');
  	Route::resource('cuenta','CuentaController');
  	Route::post('cuenta/{id}/update','CuentaController@update');
  	Route::get('cuenta/{id}/delete','CuentaController@destroy');
  	Route::get('cuenta/{id}/deleteMsg','CuentaController@DeleteMsg');
});
