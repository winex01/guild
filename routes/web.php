<?php

#test
Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
