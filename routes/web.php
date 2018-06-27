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

  Route::prefix('user')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('cuenta','CuentaController');
    Route::get('profile', 'UserController@profile');
    Route::get('update', 'UserController@updateprofile');
    Route::get('transactions', 'UserController@transactions');
    Route::get('new/account', 'CuentaController@create');
    Route::post('new/account', 'CuentaController@store');

  });

});


Route::group(['middleware'=> 'auth'],function(){
	Route::get('/admin', 'AdminController@index');
	Route::get('/accounts', 'AdminController@accounts');
	Route::get('/users', 'AdminController@users');
	Route::get('/transactions', 'AdminController@transactions');
  	
});