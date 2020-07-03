<?php

use Illuminate\Support\Facades\Route;

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

// Auth::routes();
// Route::get('/profile', 'UserController@profile');
Route::post('update', ['as' => 'update', 'uses' => 'UserController@update_avatar']);

Route::get('profile', ['as' => 'profile', 'uses' => 'UserController@profile']);
Route::get('usercreate', ['as' => 'usercreate', 'uses' => 'UserController@usercreate']);
Route::get('createprofile', ['as' => 'createprofile', 'uses' => 'UserController@create']);
Route::post('create', ['as' => 'create', 'uses' => 'UserController@create']);
Route::resource('panel', 'PanelController');
// Route::resource('admin', 'AdminControl');
Route::resource('user', 'UserController');

	
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/dashboard', 'HomeController@dashboard');
// Route::get('/user', 'HomeController@dashboard');
// Route::get('/admin', 'AdminControl@index');
Route::get('/user', 'UserController@index');

