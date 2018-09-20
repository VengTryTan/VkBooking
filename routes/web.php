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
Route::get('/', 'CheckinController@index2')->name('home');
Route::get('/payment', 'CheckinController@payment');

// Route Post
Route::post('test', 'CheckinController@search')->name('checkin'); 
Route::post('budget', 'CheckinController@searchone')->name('budget');

// Admin Route
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
<<<<<<< HEAD

    Route::get('pricings', '\App\Http\Controllers\voyager\EventController@index')->name('events.index');
	Route::post('pricings', '\App\Http\Controllers\voyager\EventController@addPrice')->name('events.add');
=======
    Route::get('events', '\App\Http\Controllers\voyager\EventController@index')->name('events.index');
	Route::post('events', '\App\Http\Controllers\voyager\EventController@addEvent')->name('events.add');
>>>>>>> dbfe3a6007ddd3cf064d024d430dbd4656018abb
});

Route::get('images', 'CheckinController@image');