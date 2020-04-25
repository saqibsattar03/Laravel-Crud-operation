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

Route::get('/','JobController@index')->name('home');

Route::get('/add',"JobController@create")->name('create');

Route::post('/add',"JobController@store")->name('store');

Route::get('/edit/{id}',"JobController@edit")->name('edit');

Route::post('/update/{id}',"JobController@update")->name('update');

Route::delete('/delete/{id}',"JobController@delete")->name('delete');