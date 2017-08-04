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

Route::get('homepage', function () {
	return view('layout.home');
});

Route::get('login', function () {
	return view('layout.login');
});

Route::get('posts', function () {
	return view('layout.posts');
});

Route::get('send', function () {
	return view('layout.submit_questions');
});

Route::get('register', function () {
	return view('layout.register');
});

Route::get('share', function () {
	return view('layout.share');
});