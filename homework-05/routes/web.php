<?php

use App\Http\Controllers\JoinsPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\MusicianController;

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

Route::get('/', [JoinsPageController::class, 'getJoins'])->name('joins');

Route::resource('/genre', GenreController::class);
Route::resource('/musician', MusicianController::class);
Route::resource('/album', AlbumController::class);

Route::get('/joins', [JoinsPageController::class, 'getJoins'])->name('joins');
