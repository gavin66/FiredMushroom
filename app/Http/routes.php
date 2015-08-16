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

Route::get('/',['uses'=>'HomeController@homePage']);
Route::group(['prefix' => 'user'], function()
{
	Route::get('/login',['uses'=>'HomeController@homePage']);
	Route::get('/gavin',function(){return view('gavin');});
});

//Route::group(['prefix' => 'user'], function()
//{
//
//});
//
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
