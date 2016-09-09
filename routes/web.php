<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
	return view('about');
});

Route::get('contact', function () {
	return view('contact');
});

Route::get('storage/eclasses', function () {
	return view('/eClasses/');
});
