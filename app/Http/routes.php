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

Route::get('/',function(){return view('homePage');});

Route::get('/common/login',['uses'=>'CommonController@login']);


//Route::group(['namespace'=>'common'],function(){
//
//});
//Route::group(['prefix' => 'user'], function()
//{
//	Route::get('/login',['uses'=>'UserController@login']);
//	Route::get('/gavin',function(){return view('gavin');});
//});

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
