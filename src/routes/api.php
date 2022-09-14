<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['namespace' => 'API'], function () {
	Route::group(['namespace' => 'V1', 'prefix' => 'v1'], function () {

		Route::post('login', 'LoginController@authenticate');

		Route::get('uploads', 'UploadController@index');
		Route::post('uploads', 'UploadController@store');

		Route::group(['middleware' => 'auth:sanctum'], function () {
	   		
	   		//	Users

			Route::get('users', 'UserController@index')->middleware(['permission:users-index']);
			Route::get('users/{user}', 'UserController@show')->middleware(['permission:users-show']);
			Route::post('users', 'UserController@store')->middleware(['permission:users-store']);
			Route::put('users/{user}', 'UserController@update')->middleware(['permission:users-update']);
			Route::delete('users/{user}', 'UserController@destroy')->middleware(['permission:users-destroy']);

		});
	});
});