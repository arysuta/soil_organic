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


Route::get('/', 'MainController@index')->name('/');

Auth::routes();

Route::get('/admps07-home', 'HomeController@index')->name('home');
Route::resource('/admps07-barang', 'BarangController');
Route::resource('/Main', 'MainController');
Route::resource('/Category', 'CategoryController');
Route::get('/detail/{id}', 'MainController@detail')->name('Main.detail');
Route::get('/About', 'MainController@about')->name('about');
Route::get('/Contact', 'MainController@contact')->name('contact');
