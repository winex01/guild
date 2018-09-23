<?php

#test
Route::get('/test2', function () {
    return view('test');
});


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
