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

/*Route::get('/', function () {
 	return view('welcome');
    echo "Hi, Hello World !!";
});*/

Route::get('mypage',function() {
	echo "Welcome to my page";
});

Route::get('/', function () {
 	return view('website.index');

});
Route::get('/account', function () {
 	return view('website.account');
});

Route::get('/register', function () {
 	return view('website.register');
});