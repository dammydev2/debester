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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/DI', 'HomeController@DI');
Route::get('/largeFormat', 'HomeController@largeFormat');
Route::get('/sublimation', 'HomeController@sublimation');
Route::get('/plasticID', 'HomeController@plasticID');
Route::get('/brocures', 'HomeController@brocures');
Route::get('/promotionalItem', 'HomeController@promotionalItem');
Route::get('/letterHead', 'HomeController@letterHead');
Route::get('/companySeal', 'HomeController@companySeal');
Route::get('/customizedShirt', 'HomeController@customizedShirt');
Route::get('/customizedShirt', 'HomeController@customizedShirt');
Route::get('/paperBack', 'HomeController@paperBack');
Route::get('/fashion', 'HomeController@fashion');
Route::get('/outdoorCatering', 'HomeController@outdoorCatering');
Route::get('/cateringService', 'HomeController@cateringService');
Route::get('/stationery', 'HomeController@stationery');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');


