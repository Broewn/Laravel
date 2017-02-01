<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('admin');
});

Route::group(['middleware' => ['web']], function() {
  Route::resource('country','CountryController');  
});

Route::group(['middleware' => ['web']], function() {
  Route::resource('customer','CustomerController');  
});

Route::group(['middleware' => ['web']], function() {
  Route::resource('product','ProductController');  
});

Route::group(['middleware' => ['web']], function() {
  Route::resource('category','CategoryController');  
});