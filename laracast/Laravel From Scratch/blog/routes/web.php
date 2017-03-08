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
	$tasks = [
		"Become PHP Ninja",
		"Become Go Ninja",
		"Become Python Ninja"
	];
    return view('welcome', [
    		'tasks' => $tasks
    	]);
});

Route::get('/about', function(){
	return view('about');
});