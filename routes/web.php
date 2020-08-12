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
Route::get('/paint_number30x40/{product_id}', 'ProductController@showPaint_number30x40') -> name('showCard1');// cart item
// картины по номерам 40x50
Route::get('/paint_number40x50', 'MainController@paint_number40x50');// all
Route::get('/paint_number40x50/{product_id}', 'ProductController@showPaint_number40x50') -> name('showCard2');// cart item
// триптихи по номерам 40x50
Route::get('/trip_number40x50', 'MainController@trip_number40x50');// all
Route::get('/trip_number40x50/{product_id}', 'ProductController@showTrip_number40x50') -> name('showCard3');// cart item
// алмазная мозайка 20х30
Route::get('/diamond_20x30', 'MainController@diamond_20x30');// all
Route::get('/diamond_20x30/{product_id}', 'ProductController@showDiamond_20x30') -> name('showCard4');// cart item
// алмазная мозайка круглая 40х50
Route::get('/diamond_sircle_40x50', 'MainController@diamond_sircle_40x50');// all
Route::get('/diamond_sircle_40x50/{product_id}', 'ProductController@showDiamond_sircle_40x50') -> name('showCard5');// cart item
// алмазная мозайка квадратная 30х40
Route::get('/diamond_square_30x40', 'MainController@diamond_square_30x40');// all
Route::get('/diamond_square_30x40/{product_id}', 'ProductController@showDiamond_square_30x40') -> name('showCard6');// cart item