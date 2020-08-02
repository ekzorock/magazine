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
// румбоксы
Route::get('/rumbox', 'MainController@rumbox'); //all
Route::get('/rumbox/{product_id}', 'ProductController@showRumbox') -> name('showCard');// card item
// картины по номерам 30x40
Route::get('/paint_number30x40', 'MainController@paint_number30x40');// all
Route::get('/paint_number30x40/{product_id}', 'ProductController@showPaint_number30x40') -> name('showCard');// cart item
// картины по номерам 40x50
Route::get('/paint_number40x50', 'MainController@paint_number40x50');// all
Route::get('/paint_number40x50/{product_id}', 'ProductController@showPaint_number40x50') -> name('showCard');// cart item
// триптихи по номерам 40x50
Route::get('/trip_number40x50', 'MainController@trip_number40x50');// all
Route::get('/trip_number40x50/{product_id}', 'ProductController@showTrip_number40x50') -> name('showCard');// cart item
// алмазная мозайка 20х30
Route::get('/diamond_mosaic20x30', 'MainController@diamond_mosaic_20x30');// all
Route::get('/trip_number40x50/{product_id}', 'ProductController@showTrip_number40x50') -> name('showCard');// cart item