<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
