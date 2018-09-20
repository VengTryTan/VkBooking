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

Auth::routes();

// Route Get
Route::get('/', 'CheckinController@index2');
Route::get('/payment', 'ReservationController@index');

// Route Post
Route::post('test', 'CheckinController@search')->name('checkin'); 
Route::post('budget', 'CheckinController@searchone')->name('budget');

// Admin Route
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('pricings', '\App\Http\Controllers\voyager\EventController@index')->name('events.index');
	Route::post('pricings', '\App\Http\Controllers\voyager\EventController@addPrice')->name('events.add');
});

Route::get('images', 'CheckinController@image');