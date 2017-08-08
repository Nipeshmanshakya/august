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

Route::get('register','loginController@register');
Route::post('register','loginController@postregister');
Route::get('login','loginController@login');
Route::post('login','loginController@postlogin');