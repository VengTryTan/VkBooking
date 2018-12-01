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
// Route::get('/', 'CheckinController@index2')->name('home');
/**
 * Rathanak Test Route
 */
Route::get('/', 'CheckinController@index3')->name('test_home');
Route::get('/payment', 'CheckinController@payment');

// Route Post
Route::post('property', 'CheckinController@search')->name('checkin'); 
Route::post('budget', 'CheckinController@searchone')->name('budget');

// Admin Route
Route::group(['prefix' => 'admin'], function () {
	
    Voyager::routes();

    Route::get('rates', '\App\Http\Controllers\voyager\EventController@index')->name('events.index');
	Route::post('rates', '\App\Http\Controllers\voyager\EventController@addEvent')->name('events.add');
});

Route::get('images', 'CheckinController@image');
Route::get('send','mailController@send');

Route::get('invoice','InvoiceController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
