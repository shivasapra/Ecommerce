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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vendors', 'VendorController@index')->name('vendors');
Route::get('/vendor/create', 'VendorController@create')->name('vendor.create');
Route::post('/vendor/store', 'VendorController@store')->name('vendor.store');
Route::get('/vendor/edit/{id}', 'VendorController@edit')->name('vendor.edit');
Route::post('/vendor/update/{id}', 'VendorController@update')->name('vendor.update');
Route::get('/vendor/view/{id}', 'VendorController@show')->name('vendor.view');
Route::get('/vendor/delete/{id}', 'VendorController@destroy')->name('vendor.delete');


Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/client/create', 'ClientController@create')->name('client.create');
Route::post('/client/store', 'ClientController@store')->name('client.store');
Route::get('/client/edit/{id}', 'ClientController@edit')->name('client.edit');
Route::post('/client/update/{id}', 'ClientController@update')->name('client.update');
Route::get('/client/view/{id}', 'ClientController@show')->name('client.view');
Route::get('/client/delete/{id}', 'ClientController@destroy')->name('client.delete');


Route::get('/employees', 'EmployeeController@index')->name('employees');
Route::get('/employee/create', 'EmployeeController@create')->name('employee.create');
Route::post('/employee/store', 'EmployeeController@store')->name('employee.store');
Route::get('/employee/edit/{id}', 'EmployeeController@edit')->name('employee.edit');
Route::post('/employee/update/{id}', 'EmployeeController@update')->name('employee.update');
Route::get('/employee/view/{id}', 'EmployeeController@show')->name('employee.view');
Route::get('/employee/delete/{id}', 'EmployeeController@destroy')->name('employee.delete');


Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::get('/category/view/{id}', 'CategoryController@show')->name('category.view');
Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');