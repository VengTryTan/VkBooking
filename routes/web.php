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

Route::get('/', 'ImageController@index1');
Route::get('/testing', 'ImageController@index2');

Route::post('/type', 'TypeController@type')->name('type');
Route::resource('item', 'ImageController');
// Route::get('welcome', function () {
//     return view('welcome');
// });
// Route::get('/go', function () {
//     return view('go');
// });
Route::get('test', 'CheckinController@index')->name('checkin');
Route::resource('reservation', 'CheckinController@store');
Route::resource('type', 'TypeController');
Route::resource('image', 'ImageController');
Route::post('testing', 'GuestOneController@search')->name('testing');


/*superadmin route*/
Route::get('superadmin', 'SuperadminController@index');
Route::get('superadmin/type/{id}/edit', 'SuperadminController@edit')->name('types.edit');
Route::post('superadmin/type/{id}/edit', 'SuperadminController@update')->name('types.update');

Route::get('billing', 'BillingController@handle_billing');
Route::get('rate', 'RateController@handle_rate');

Route::get('rate/{id}', function(App\Image $id){
	return $id->type_ID;
})->where(['id' => '[0-9]+']);

Route::get('activity', 'ActivityController@index')->name('activity');



/*
Route::get('/search/{id}', 'RoomController@show')->name('search');

Route::get('/room', 'RoomController@index')->name('retrieve');

Route::get('/upload','RoomController@create')->name('upload'); */