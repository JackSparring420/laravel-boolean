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

Route::get('/', 'GuestController@home') -> name('home');
//-----------------------------------------------------------
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
//-----------------------------------------------------------
Route::get('/api/postcards/list', 'ApiController@getPostcards')->name('api.postcards.list');

Route::get('/postcard/create', 'GuestController@createPostcard') -> name('postcard.create');
Route::post('/postcard/store', 'GuestController@store') ->name('store');


// Route::get('/api/postcards/delete/{id}', 'ApiController@deletePostcards')->name('api.postcards.delete');
