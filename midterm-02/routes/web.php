<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('log');

Route::name('custom.')
    ->namespace('App\Http\Controllers')
    ->prefix('custom')
    ->group(function () {
        Route::post('/register', [CustomAuthController::class, 'register'])
            ->name('register')->middleware('guest');
        Route::post('/login', [CustomAuthController::class, 'login'])
            ->name('login')->middleware('guest');
        Route::post('/logout', [CustomAuthController::class, 'logout'])
            ->name('logout')->middleware('auth');
    });

Route::middleware('auth')->group(function () {
    Route::resource('companies', CompanyController::class);
    Route::resource('companies.employees', EmployeeController::class);
});
