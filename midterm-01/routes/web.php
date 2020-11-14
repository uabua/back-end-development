<?php

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

// Company
Route::get('/company/all', '\App\Http\Controllers\CompanyController@viewAllCompanies')->name('companies.all');
Route::post('/company/add', '\App\Http\Controllers\CompanyController@addCompany')->name('companies.add');
Route::get('/company/create-new-record', '\App\Http\Controllers\CompanyController@createNewCompany')->name('companies.create');
Route::post('/company/delete', '\App\Http\Controllers\CompanyController@deleteCompany')->name('companies.delete');
Route::get('/company/edit/{id}', '\App\Http\Controllers\CompanyController@editCompany')->name('companies.edit');
Route::post('/company/update/{id}', '\App\Http\Controllers\CompanyController@updateCompany')->name('companies.update');

// Employee
Route::get('/employee/all', '\App\Http\Controllers\EmployeeController@viewAllEmployees')->name('employees.all');
Route::post('/employee/add', '\App\Http\Controllers\EmployeeController@addEmployee')->name('employees.add');
Route::get('/employee/create-new-record', '\App\Http\Controllers\EmployeeController@createNewEmployee')->name('employees.create');
Route::post('/employee/delete', '\App\Http\Controllers\EmployeeController@deleteEmployee')->name('employees.delete');
Route::get('/employee/edit/{id}', '\App\Http\Controllers\EmployeeController@editEmployee')->name('employees.edit');
Route::post('/employee/update/{id}', '\App\Http\Controllers\EmployeeController@updateEmployee')->name('employees.update');
