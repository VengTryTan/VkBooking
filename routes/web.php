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
<<<<<<< HEAD
Route::get('/', 'CheckinController@index2');
Route::get('/payment', 'CheckinController@payment');
=======
Route::get('/', 'CheckinController@index2')->name('home');
Route::get('/payment', 'ReservationController@index');
>>>>>>> 1fc68beb9bfc497b77fae77cdf9b5a3ee4e1566c

// Route Post
Route::post('test', 'CheckinController@search')->name('checkin'); 
Route::post('budget', 'CheckinController@searchone')->name('budget');

// Admin Route
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('events', '\App\Http\Controllers\voyager\EventController@index')->name('events.index');
	Route::post('events', '\App\Http\Controllers\voyager\EventController@addEvent')->name('events.add');
});

