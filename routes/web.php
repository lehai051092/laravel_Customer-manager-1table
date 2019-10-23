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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function (){
    Route::get('list','CustomerController@index')->name('users.index');
    Route::get('formAdd', 'CustomerController@formAdd')->name('users.formAdd');
    Route::post('create','CustomerController@create')->name('users.create');
    Route::get('formUpdate/{id}','CustomerController@update')->name('users.update');
    Route::post('formUpdate/{id}','CustomerController@edit')->name('users.update');
    Route::get('delete/{id}','CustomerController@deleteCustomer')->name('users.delete');
});
