<?php

Route::get('/', 'IndexController@index')->name('index');
Route::get('/welcome', 'IndexController@welcome')->name('welcome');

Route::get('/category/{category}', 'CategoryController@index')->name('welcome');
Route::get('/post/{post}', 'PostController@index')->name('welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
