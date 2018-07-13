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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','ImageController@index1');
Route::get('/testing','ImageController@index2');

Route::post('/type','TypeController@type')->name('type');
Route::resource('item', 'ImageController');
// Route::get('welcome', function () {
//     return view('welcome');
// });
// Route::get('/go', function () {
//     return view('go');
// });
Route::get('test', 'CheckinController@index')->name('checkin');
Route::resource('reservation','CheckinController@store');
Route::resource('type','TypeController');
Route::resource('image', 'ImageController');


/*superadmin route*/
Route::resource('superadmin', 'SuperadminController');
Route::get('billing', 'BillingController@handle_billing');
Route::get('rate', 'RateController@handle_rate');
Route::get('rate/{type_ID}', function($type_ID){
	echo "string";
});

/*
Route::get('/search/{id}', 'RoomController@show')->name('search');

Route::get('/room', 'RoomController@index')->name('retrieve');

Route::get('/upload','RoomController@create')->name('upload'); */
