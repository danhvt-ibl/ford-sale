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

Route::resource('car', 'CarController', ['except' => ['show', 'create']]);

Route::get('car/create', ['as' => 'car.create', 'uses' => 'CarController@create']);
Route::get( 'car/{id}-{slug?}', ['as' => 'car.show','uses' => 'CarController@show']);

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

// PAGEs Controller
Route::get('dieu-khoan-dich-vu', 'PagesController@terms');
Route::get('chinh-sach-bao-mat', 'PagesController@privacy');
Route::get('lien-he', ['as' => 'pages.contact', 'uses' =>'PagesController@contact']);
Route::get('gioi-thieu', ['as' => 'pages.welcome', 'uses' =>'PagesController@welcome']);

Route::resource('profile', 'ProfileController');
Route::get('show-profile', ['as' => 'show-profile', 'uses' => 'ProfileController@showProfileToUser']);
Route::get('my-profile', ['as' => 'my-profile', 'uses' => 'ProfileController@myProfile']);

Route::resource('user', 'UserController');

Route::get('settings', 'SettingsController@edit');
Route::post('settings', ['as' => 'userUpdate', 'uses' => 'SettingsController@update']);

Route::resource('marketing-image', 'MarketingImageController');

// Route::get('api/user-chart', 'ApiController@userChartData');

Route::resource('dong-xe', 'VerhicleController');
Route::resource('bai-dang', 'PostsController');
