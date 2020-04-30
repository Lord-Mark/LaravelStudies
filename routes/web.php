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

// Route::get('/variable/{id}/{name}', function ($id, $name) {
// 	return "The name is $name and his id is $id";
// });

Route::get('/', 'PagesController@index');
Route::any('/about', 'PagesController@about');
Route::any('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');