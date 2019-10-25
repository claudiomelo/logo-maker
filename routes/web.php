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

Route::get('/', 'LogoCreatorController@home')->name('/');
Route::get('/getIcons', 'LogoCreatorController@searchIcons')->name('/');

Route::group(['prefix' => '/api/'], function () {
	Route::post('/search/logos', 'LogoCreatorController@searchApi')->name('search-logos');
});