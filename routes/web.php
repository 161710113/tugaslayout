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
Route::get('/test', function () {
    return view('layouts.isi');
});
Route::get('/contact', function () {
    return view('layouts.contact');
});
Route::get('/biodata', function () {
    return view('layouts.bio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
