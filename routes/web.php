<?php

#test
Route::get('/test2', function () {
    return view('test');
});


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

#home
Route::namespace('home')->group(function () {
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');
