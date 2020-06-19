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

// Auth::routes();
// Route::get('/profile', 'UserController@profile');
Route::post('update', ['as' => 'update', 'uses' => 'UserController@update_avatar']);

Route::get('profile', ['as' => 'profile', 'uses' => 'UserController@profile']);
	
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

