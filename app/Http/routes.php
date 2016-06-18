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
    return view('welcome');
});

Route::get('/sign-up',function() { return view('sign-up'); } );

Route::get('/sign-in',function() { return view('sign-in'); } );

Route::post('/sign_up',[
	'uses' => 'UsersController@signUp',
	'as' => 'sign_up'
	]);