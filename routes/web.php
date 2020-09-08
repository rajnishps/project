<?php

use Illuminate\Support\Facades\Route;


Route::get('/','MainController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/imager','ImageController@post');
Route::delete('/image/{id}','ImageController@destroy');
Route::get('/upload', 'ImageController@index');
Route::get('/pics', 'PhotosController@index');


