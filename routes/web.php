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

Route::get('/home', 'HomeController@index')->name('home');

// Posts
Route::get('posts', 'PostController@index')->name('items');
Route::get('posts/create', 'PostController@create')->name('create-item');
Route::post('posts', 'PostController@store')->name('item-store');
Route::delete('posts/{id}', 'PostController@destroy')->name('delete-item');
Route::get('posts/{id}', 'PostController@show')->name('show-item');



