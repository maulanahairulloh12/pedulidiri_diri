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
    return view('auth.login');
});


Route::post('/postlogin','AuthController@postlogin');
Route::get('/perjalanan','PerjalananController@index');
Route::get('/dashboard','DashboardController@index');
Route::post('/perjalanan/create','PerjalananController@create');
Route::get('/profile','ProfileController@profile');