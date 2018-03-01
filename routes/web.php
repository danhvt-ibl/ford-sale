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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('car', 'CarController', ['except' => ['show', 'create']]);

Route::get('car/create', ['as' => 'car.create', 'uses' => 'CarController@create']);
Route::get( 'car/{id}-{slug?}', ['as' => 'car.show','uses' => 'CarController@show']);

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);