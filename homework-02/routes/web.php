<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;
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

Route::get('/car/all', '\App\Http\Controllers\CarController@viewAllCars')->name('cars.all');
Route::post('/car/add', '\App\Http\Controllers\CarController@addCar')->name('cars.add');
Route::get('/car/add-car-info', '\App\Http\Controllers\CarController@addCarInfo')->name('cars.addCarInfo');
Route::post('/car/delete', '\App\Http\Controllers\CarController@deleteCar')->name('cars.delete');
Route::get('/car/edit/{id}', '\App\Http\Controllers\CarController@editCar')->name('cars.edit');
Route::post('/car/update/{id}', '\App\Http\Controllers\CarController@updateCar')->name('cars.update');


