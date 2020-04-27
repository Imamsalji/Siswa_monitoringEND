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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('datas','dataController');
Route::resource('sets','setController');
Route::resource('isis','isiController');
Route::resource('laps','lapController');
Route::get('cari','setController@cari');
Route::get('search','isiController@search');
Route::get('neang','dataController@neang');
Route::get('storen','isiController@storen');

Route::group(['middleware' => 'auth'], function () {

    Route::get('password', 'PasswordController@edit')
        ->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')
        ->name('user.password.update');
});