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
// 	return "Hello from eclipse";
	return view('welcome');
});
Route::get("videos", "VideoController@index");
Route::get("video/create","VideoController@create");
Route::post("video/create","VideoController@store");
Route::get("video/{id}", "VideoController@show");
Route::get("vimeo","VimeoController@index");
