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

Route::get('/', ['uses' => 'HomeController@index']);

Route::get('search', ['uses' => 'HomeController@listProperties']);

Route::post('search', ['uses' => 'HomeController@getProperties']);

Route::get('viewDetail', ['uses' => 'HomeController@getProperty']);

