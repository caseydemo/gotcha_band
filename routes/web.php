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

Route::get('/pictures', function(){
	return view('pictures');
});

Route::get('/video', function(){
	return view('video');
});

Route::get('/schedule', function(){
	return view('schedule');
});

Route::resource('/home' , 'GotchaController');

// Route::get('/', function () {
//     return view('home');
// });
