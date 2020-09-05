<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/delivery','MainController@delivery');
Route::get('/adminpanel', 'MainController@admin')->middleware('auth');
Route::get('/thanks_for_your_order', 'MainController@thanks');

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
// алмазная мозайка квадратная 40х50
Route::get('/diamond_square_40x50', 'MainController@diamond_square_40x50');// all
Route::get('/diamond_square_40x50/{product_id}', 'ProductController@showDiamond_square_40x50') -> name('showCard7');// cart item
// алмазная мозайка с разнормазмерными стразами 40х50
Route::get('/diamond_equal_40x50', 'MainController@diamond_equal_40x50');// all
Route::get('/diamond_equal_40x50/{product_id}', 'ProductController@showDiamond_equal_40x50') -> name('showCard8');// cart item
// алмазная мозайка 3D 40х50
Route::get('/mosaic3d_40x50', 'MainController@mosaic3d_40x50');// all
Route::get('/mosaic3d_40x50/{product_id}', 'ProductController@showMosaic3d_40x50') -> name('showCard9');// cart item
// выщивка крестиком 40х40
Route::get('/embroidery_40x40', 'MainController@embroidery_40x40');// all
Route::get('/embroidery_40x40/{product_id}', 'ProductController@showEmbroidery_40x40') -> name('showCard10');// cart item
// вышивка крестиком 40х50
Route::get('/embroidery_40x50', 'MainController@embroidery_40x50');// all
Route::get('/embroidery_40x50/{product_id}', 'ProductController@showEmbroidery_40x50') -> name('showCard11');// cart item
// картины по дереву 40х50
Route::get('/wood_pictures_40x50', 'MainController@wood_pictures_40x50');// all
Route::get('/wood_pictures_40x50/{product_id}', 'ProductController@showWood_pictures_40x50') -> name('showCard13');// cart item
// аксессуары
Route::get('/accessories', 'MainController@accessories');// all
Route::get('/showAccessories/{product_id}', 'ProductController@showAccessories') -> name('showCard12');// cart item

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
