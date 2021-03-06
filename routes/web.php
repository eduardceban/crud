<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('articles', 'ArticleController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
