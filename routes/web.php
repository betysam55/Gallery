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

Route::group(['middleware'=>'web'], function(){
Route::auth();
Route::get('/','AlbumController@index');
Route::get('/albums','AlbumController@index');
Route::get('/albums/create','AlbumController@create');
Route::get('/albums/{id}','AlbumController@show');
Route::post('/albums/store','AlbumController@store');

Route::get('/photos/create/{id}','PhotoController@create');
Route::post('/photos/store','PhotoController@store');
Route::get('/photos/{id}','PhotoController@show');
Route::delete('/photos/{id}','PhotoController@destroy');
Auth::routes();

Route::get('/home', 'AlbumController@index')->name('home');

Auth::routes();

Route::get('/home', 'AlbumController@index')->name('home');

});
