<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\PageController@getHomePage');
Route::get('/home', '\App\Http\Controllers\PageController@getHomePage');
Route::get('/about', '\App\Http\Controllers\PageController@getAboutPage');
Route::get('/jokes', '\App\Http\Controllers\PageController@getJokesPage');
Route::get('/contact', '\App\Http\Controllers\PageController@getContactPage');
