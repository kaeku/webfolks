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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('forum', 'ForumController@index');
Route::get('forum/category/{id}', 'CategoryController@index');
Route::get('forum/category/{id}/thread/new', 'ThreadController@displayNewThread');
Route::post('forum/category/{id}/thread/new', 'ThreadController@createNewThread');
Route::get('forum/category/{category_id}/thread/{thread_id}', 'ThreadController@index');
Route::post('forum/category/{category_id}/thread/{thread_id}/post/new', 'ThreadController@newAnswer');
Route::post('forum/category/{category_id}/thread/{thread_id}/post/delete', 'ThreadController@deleteAnswer');
Route::get('forum/category/{category_id}/thread/{thread_id}/post/edit', 'ThreadController@displayEditAnswer');
Route::post('forum/category/{category_id}/thread/{thread_id}/post/edit', 'ThreadController@editAnswer');

Route::get('user/{id}/profile', 'UsersController@displayProfile');

Route::controllers([
  'api' => 'CategoryController'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
