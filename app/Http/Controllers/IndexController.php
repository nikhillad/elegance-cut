<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Config;
use App;

class IndexController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Index Controller
	|--------------------------------------------------------------------------
	|
	| This is a landing and main controller. Responsible for many leading functions like home, about us etc.
	|
	*/

	/**
	 * Landing function
	 *
	 * @return view
	 */

    public function index()
    {	
    	//fetch all the categories
    	$objCategory = App\CategoryMaster::all();

    	//fetch all the item types
    	$objType = App\TypeMaster::all();

    	//get category id versus category name array
    	$arrCetegory_id_name = getKeyValueArray('cat_id','name',$objCategory,'object');

    	$arrType_id_name = getKeyValueArray('type_id','name',$objType,'object');

    	return view('home',['objCategory'=>$objCategory,'objType'=>$objType,'arrCetegory_id_name'=>$arrCetegory_id_name,'arrType_id_name'=>$arrType_id_name]);
    }

    /**
	 * About us function. Uses both get and post. Uses post for form submission.  
	 *
	 * @return view
	 */
    public function about_us(Request $request)
    {	
    	$form['name'] = $request->input('name','');
    	$form['email'] = $request->input('email','');
    	$form['message'] = $request->input('message','');
    	$message = '';

    	if ($request->isMethod('post')) 
    	{
	    	if($form['name'] != '' && $form['email'] != '' && $form['message'] != '')
	    	{
	    		if (filter_var($form['email'], FILTER_VALIDATE_EMAIL))
	    		{
	    			//send email code
	    		}
	    		else
	    		{
	    			$message = 'Please enter a valid email address';
	    		}
	    	}
	    	else
	    	{
	    		$message = 'Please fill in all the fields';
	    	}
    	}
    	return view('about_us',['message'=>$message,'form'=>$form]);
    }
}
