<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Config;
use App;

class UserController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| User Controller
	|--------------------------------------------------------------------------
	|
	| This is controller meant for all user specific actions, like - login, register, account and orders.
	|
	*/

	/**
	 * Register function
	 *
	 * @return view
	 */    
	public function register()
	{
		return view('register');
	}
}
