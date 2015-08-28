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

Route::get('/', 'UsersController@home');

/*Route::get('posts', 'PostsController@index');

Route::get('posts/create', 'PostsController@create');

Route::post('posts/create', 'PostsController@store');

Route::delete('posts/destroy/{id}', 'PostsController@destroy');

Route::get('posts/{id}', 'PostsController@show');

Route::get('posts/{id}/edit', 'PostsController@edit');

Route::patch('posts/{id}/edit', 'PostsController@update');*/

Route::resource('posts', 'PostsController');

Route::resource('users', 'UsersController');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);*/

Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
