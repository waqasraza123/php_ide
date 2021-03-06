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

Route::get('/', function(){
    if(\Illuminate\Support\Facades\Auth::check()){
        return view('home');
    }
	return view('auth.register');
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('ide', 'IdeController@showIde');

//save code
Route::post('ide', 'IdeController@handle');

//show codes by all users
Route::get('codes', 'CodeController@index');