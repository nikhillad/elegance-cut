<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::get('/', ['as' => 'home', 'uses' => 'IndexController@index']);

	Route::match(['get', 'post'], 'sign-up', ['as' => 'register', 'uses' => 'UserController@register']);

	Route::get('cart', ['as' => 'cart', 'uses' => 'UserController@cart']);

	Route::get('my-account', ['as' => 'account', 'uses' => 'UserController@account']);

	Route::get('my-orders', ['as' => 'orders', 'uses' => 'UserController@orders']);

	Route::match(['get', 'post'], 'about-us', ['as' => 'about_us', 'uses' => 'IndexController@about_us']);

	Route::match(['get', 'post'], 'login', ['as' => 'login', 'uses' => 'UserController@login']);

	Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);

    Route::match(['get', 'post'], 'about-us', ['as' => 'about_us', 'uses' => 'IndexController@about_us']);
});
