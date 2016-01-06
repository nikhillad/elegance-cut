<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Config;
use App;
use DB;

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
	 * Login function
	 *
	 * @return view
	 */    
	public function login(Request $request)
	{
    	$form['email'] 			= $request->input('email','');
    	$form['password'] 		= $request->input('password','');
    	$form['remember_me'] 	= $request->input('remember_me','');

    	$objUser = App\UserMaster::where('email',$form['email'])->first();

    	if($objUser == NULL || (md5($form['password']) !== $objUser->password))
    	{
    		$message = 'Invalid username or password.';
    		return view('user.login',['message'=>$message,'email'=>$form['email']]);
    	}

    	if($form['remember_me'] == 'selected')
    		login($objUser->fname,$objUser->user_id,$objUser->email,true);
    	else
    		login($objUser->fname,$objUser->user_id,$objUser->email);

		return view('home');
	}	

	/**
	 * Logout function
	 *
	 * @return view
	 */  
	public function logout(Request $request)
	{
		logout();
		return redirect()->route('home');
	}

	/**
	 * Register function
	 *
	 * @return view
	 */    
	public function register(Request $request)
	{
		$arrStates = DB::connection('mongodb')->collection('states')->get();
		$arrCountries = DB::connection('mongodb')->collection('countries')->get();
		
		$arrStates_code_state = getKeyValueArray('code','state',$arrStates);
		$arrCountries_code_country = getKeyValueArray('code','country',$arrCountries);

		$form['fname'] 			= $request->input('fname','');
		$form['lname'] 			= $request->input('lname','');
    	$form['email'] 			= $request->input('email','');
    	$form['password'] 		= $request->input('password','');
    	$form['cnf_password'] 	= $request->input('cnf_password','');
    	$form['email'] 			= $request->input('email','');
    	$form['mobile'] 		= $request->input('mobile','');
    	$form['zip'] 			= $request->input('zip','');
    	$form['address'] 		= $request->input('address','');
    	$form['city'] 			= $request->input('city','');
    	$form['state'] 			= $request->input('state','');
    	$form['country'] 		= $request->input('country','');
    	$form['tnc'] 			= $request->input('tnc','');

    	$message = '';

    	if ($request->isMethod('post')) 
    	{
	    	if($form['fname'] != '' && $form['lname'] != '' && $form['email'] != '' && $form['password'] != ''
	    		&& $form['cnf_password'] != '' && $form['email'] != '' && $form['mobile'] != '' && $form['zip'] != ''
	    		&& $form['address'] != '' && $form['city'] != ''
	    		)
	    	{
	    		if (!filter_var($form['email'], FILTER_VALIDATE_EMAIL))
	    		{
	    			$message[] = '-Please enter a valid email address.';
	    		}
	    		if($form['password'] != $form['cnf_password'])
		    	{
		    		$message[] = '-Password didn\'t match. Plese type exact password in \'Confirm Password\' field.';
		    	}	
		    	if(count($form['mobile']) > 10)	
			    {
			    	$message[] = '-Please enter only 10 digit mobile number.';		
			    }
			    if($form['state'] == 'select' || $form['country'] == 'select' || !array_key_exists($form['state'], $arrStates_code_state)
    			||  !array_key_exists($form['country'], $arrCountries_code_country))
    			{
    				$message[] = '-Please select your state and country.';
    			}
		    	if($form['tnc'] == '')
				{
					$message[] = '-Please provide your concent towards terms and conditions.';
				}	
			    
			    if(empty($message))
			    {
			    	try{
				    	//save user in database
				    	$objUserMaster = new App\UserMaster();

				    	$objUserMaster->fname 	 = $form['fname'];
				    	$objUserMaster->lname 	 = $form['lname'];
				    	$objUserMaster->email 	 = $form['email'];
				    	$objUserMaster->mobile 	 = $form['mobile'];
				    	$objUserMaster->zip_code = $form['zip'];
				    	$objUserMaster->state 	 = $form['state'];
				    	$objUserMaster->country  = $form['country'];
				    	$objUserMaster->city 	 = $form['city'];
				    	$objUserMaster->address  = $form['address'];
				    	$objUserMaster->password = md5($form['password']);

			    		$res = $objUserMaster->save();

			    		$LastInsertId = $objUserMaster->user_id;
			    	}
			    	catch(\Exception $e)
			    	{
			    		$message[] = 'Looks like the email you have entered, already exists. Please try with another email id.';
			    	}

			    	if(isset($res) && $res == true && empty($message))
			    	{
			    		//call login method to set the session, cookie etc.
			    		login($form['fname'], $LastInsertId, $form['email']);

			    		return redirect()->route('home');
			    	}
			    	else if(empty($message))
			    	{
			    		$message[] = 'Something went wrong. Please try again.';
			    	}
			    }		
			    			
	    	}
	    	else
	    	{
	    		$message[] = '-Please fill in all the fields.';
	    	}
    	}
    	
    	if(is_array($message))
    	{
    		$temp = '';

    		foreach($message as $value)
    		{
    			$temp = $temp.$value.'<br>';
    		}

    		$message = $temp;
    	}

    	return view('user.register',['message'=>$message,'form'=>$form,'arrStates'=>$arrStates,'arrCountries'=>$arrCountries]);
	}
}
