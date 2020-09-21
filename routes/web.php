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
Route::get('/','frontend\HomeController@index')->name('home');
Route::get('/about','frontend\HomeController@about')->name('about');



Route::get('/admin','backend\AdminController@dashboard')->name('admin');
