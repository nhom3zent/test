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

//Route::get('/login', '')
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'UserController@index')->name('home');
    Route::get('/create-user', 'UserController@create')->name('createUser');
    Route::post('/store-user', 'UserController@store')->name('storeUser');
});
