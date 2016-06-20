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

Route::get('/', [
	'uses' => 'ViewsController@toHomePage',
	'as' => 'homepage'
	]);




Route::get('/sign-up',[
	'uses' => 'ViewsController@toRegisterPage',
	'as' => 'sign-up'
	]);
Route::get('/sign-in',[
	'uses' => 'ViewsController@toLoginPage',
	'as' => 'sign-in'
	]);
Route::get('/dashboard',[
	'uses' => 'ViewsController@toDashboard',
	'as' => 'dashboard'
	]);


Route::post('/register',[
	'uses' => 'UsersController@register',
	'as' => 'register'
	]);
Route::post('/login',[
	'uses' => 'UsersController@login',
	'as' => 'login'
	]);

Route::get('/logout',[
	'uses' => 'UsersController@logout',
	'as' => 'logout'
	]);