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

Route::get('/', ['uses' => 'HomeController@listProperties']);

Route::get('search', ['uses' => 'HomeController@listProperties']);

Route::post('search', ['uses' => 'HomeController@getProperties']);

Route::get('viewDetail/{property}/{agent}', ['uses' => 'HomeController@getProperty']);

Auth::routes();

Route::get('home', 'HomeController@index');

Route::get('backend', 'HomeController@backend');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('list-agents', ['uses' => 'AgentsController@list_agents']);

Route::get('agents-list-data',['uses' => 'AgentsController@list_agents_data']);

Route::get('add_agent',['uses' => 'AgentsController@add_agent']);

Route::post('save_agent',['uses' => 'AgentsController@save_agent']);

Route::get('list-properties', ['uses' => 'PropertiesController@list_properties']);

Route::get('properties-list-data',['uses' => 'PropertiesController@list_properties_data']);

Route::get('add_property',['uses' => 'PropertiesController@add_property']);

Route::post('save_property',['uses' => 'PropertiesController@save_property']);

Route::get('contact/{property}/{agent}',['uses' => 'AgentsController@contact']);

Route::post('save_lead',['uses' => 'AgentsController@save_lead']);








