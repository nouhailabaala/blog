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
Route::get('/posts', 'PostsController@index')->name('index');
Route::get('/create', 'PostsController@create')->name('create');
Route::post('/create', 'PostsController@store')->name('store');
Route::delete('/delete/{post}', 'PostsController@destroy')->name('destroy');
