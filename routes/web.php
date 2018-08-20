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

Route::get('chat',"Web\ChatController@getChat");
Route::post('send',"Web\ChatController@send");
Route::post('saveToSession',"Web\ChatController@saveToSession");
Route::post('getOldMessage',"Web\ChatController@getOldMessage");
Route::post('deleteSession',"Web\ChatController@deleteSession");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
