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

Route::view('/', 'welcome');

Route::get('/books', function () {
	return 'Here are all the books...';
});

Route::get('/book', function () {
	return 'Show all the books...';
});

Route::get('/book/{title?}', function($title = '') {
	return 'You are viewing '.$title;
});

