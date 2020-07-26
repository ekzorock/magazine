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

Route::get('/', 'MainController@index');
Route::post('/', 'MainController@store');
Route::get('/about', 'MainController@about');
Route::get('/contact', 'MainController@contact');
Route::get('/rumbox', 'MainController@rumbox');
Route::get('/rumbox/{product_id}', 'ProductController@showRumbox') -> name('showCard');

