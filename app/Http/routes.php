<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
		return view('index');
	});

Route::get('chisiamo', function () {
		return view('chisiamo');
	});
	
Route::get('prenotazioni', function () {
			return view('index-2');
	});
	
Route::get('blog', function () {
			return view('index-3');
	});
	
Route::get('dovesiamo', function () {
				return view('index-4');
	});
