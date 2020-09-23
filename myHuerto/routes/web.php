<?php

Route::view('/', 'home')->name('home');
Route::view('/myhuerto', 'myhuerto')->name('myhuerto');
Route::view('/auth/passwords/login', 'login')->name('login');
Route::view('/registroproductos', 'registroproductos')->name('registroproductos');

Route::post('registroproductos', 'AddController@store');

Auth::routes();


