<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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
		if($this->user_session->is_logged_in)
			return redirect()->route('home');

		if ($request->isMethod('post')) {
		 
			if(!$request->has('email') || !$request->has('password'))
	    	{
	    		$message = 'Invalid username or password.';
	    		return view('user.login',['message'=>$message]);
	    	}

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
	    		login($objUser,true);
	    	else
	    		login($objUser);

			return redirect()->route('home');
		}

		return view('user.login');
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
		if($this->user_session->is_logged_in)
			return redirect()->route('home');

		$arrStates = DB::connection('mongodb')->collection('states')->get();
		$arrCountries = DB::connection('mongodb')->collection('countries')->get();
	
		$arrStates_code_state = getKeyValueArray('code','state',$arrStates);
		$arrCountries_code_country = getKeyValueArray('code','country',$arrCountries);

		$form['fname'] 			= $request->input('fname','');
		$form['lname'] 			= $request->input('lname','');
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
		    	if(strlen($form['mobile']) > 10 || strlen($form['mobile']) < 10)	
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
			    		login($objUserMaster);

			    		//send user an email verification link
			    		generate_and_send_email_verification_email($objUserMaster);

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

	/**
	 * My account function. Shows user account
	 *
	 * @return view
	 */  
	public function account(Request $request)
	{
		if(!$this->user_session->is_logged_in)
			return redirect()->route('login');

		$objUserMaster = $this->user_session;

		if($objUserMaster == null)
			return redirect()->route('login');

		return view('user.account',['objUserMaster'=>$objUserMaster]);
	}

	/**
	 * Edit account
	 *
	 * @return view
	 */  
	public function edit_account(Request $request)
	{
		if(!$this->user_session->is_logged_in)
			return redirect()->route('login');

		$objUserMaster = $this->user_session;

		if($objUserMaster == null)
			return redirect()->route('login');

		$arrStates = DB::connection('mongodb')->collection('states')->get();
		$arrCountries = DB::connection('mongodb')->collection('countries')->get();
	
		$arrStates_code_state = getKeyValueArray('code','state',$arrStates);
		$arrCountries_code_country = getKeyValueArray('code','country',$arrCountries);

		$form['fname'] = $objUserMaster->fname;
		$form['lname'] = $objUserMaster->lname;
		$form['email'] = $objUserMaster->email;
		$form['mobile'] = $objUserMaster->mobile;
		$form['zip'] = $objUserMaster->zip_code;
		$form['address'] = $objUserMaster->address;
		$form['city'] = $objUserMaster->city;
		$form['state'] = $objUserMaster->state;
		$form['country'] = $objUserMaster->country;
		
		
		$message = '';
		$current_email = $form['email'];
		$current_mobile = $form['mobile'];
		$email_verification_require = false;
		$mobile_verification_require = false;

    	if ($request->isMethod('post')) 
    	{
    		$form['fname'] 			= $request->input('fname','');
			$form['lname'] 			= $request->input('lname','');
	    	$form['email'] 			= $request->input('email','');
	    	$form['mobile'] 		= $request->input('mobile','');
	    	$form['zip'] 			= $request->input('zip','');
	    	$form['address'] 		= $request->input('address','');
	    	$form['city'] 			= $request->input('city','');
	    	$form['state'] 			= $request->input('state','');
	    	$form['country'] 		= $request->input('country','');

	    	if($form['fname'] != '' && $form['lname'] != '' && $form['email'] != '' && $form['email'] != '' && $form['mobile'] != '' && $form['zip'] != ''
	    		&& $form['address'] != '' && $form['city'] != ''
	    		)
	    	{
	    		if (!filter_var($form['email'], FILTER_VALIDATE_EMAIL))
	    		{
	    			$message[] = '-Please enter a valid email address.';
	    		}	
		    	if(strlen($form['mobile']) > 10 || strlen($form['mobile']) < 10)	
			    {
			    	$message[] = '-Please enter only 10 digit mobile number.';		
			    }
			    if($form['state'] == 'select' || $form['country'] == 'select' || !array_key_exists($form['state'], $arrStates_code_state)
    			||  !array_key_exists($form['country'], $arrCountries_code_country))
    			{
    				$message[] = '-Please select your state and country.';
    			}
			    
			    if(empty($message))
			    {
			    	try{
				    	//save user in database

			    		unset($objUserMaster->is_logged_in);

				    	$objUserMaster->fname 	 = $form['fname'];
				    	$objUserMaster->lname 	 = $form['lname'];
				    	$objUserMaster->email 	 = $form['email'];
				    	$objUserMaster->mobile 	 = $form['mobile'];
				    	$objUserMaster->zip_code = $form['zip'];
				    	$objUserMaster->state 	 = $form['state'];
				    	$objUserMaster->country  = $form['country'];
				    	$objUserMaster->city 	 = $form['city'];
				    	$objUserMaster->address  = $form['address'];

				    	//check if email has been changed
				    	if($current_email != $objUserMaster->email)
				    	{
				    		$email_verification_require = true;
				    		$objUserMaster->email_verified  = false;
				    	}	

				    	//check if mobile has been changed
				    	if($current_mobile != $objUserMaster->mobile)
				    	{
				    		$mobile_verification_require = true;
				    		$objUserMaster->mobile_verified  = false;
				    	}

			    		$res = $objUserMaster->save();

			    		$objUserMaster->is_logged_in = true;

			    		//change session details
			    		$_SESSION['elegance_cut_user']['obj'] = $objUserMaster;
			    		$this->user_session = $objUserMaster;

			    	}
			    	catch(\Exception $e)
			    	{
			    		$message[] = 'Looks like something went wrong. Please try again or contact our support team at '.config('global.support_email');
			    	}

			    	if(isset($res) && $res == true && empty($message))
			    	{
			    		//generate and send verification email if email has been changed
			    		if($email_verification_require)
			    			generate_and_send_email_verification_email($objUserMaster);	

			    		$_SESSION['message'] = 'Account details saved successfully.';
			    		return redirect()->route('account');
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


		return view('user.edit_account',['message'=>$message,'objUserMaster'=>$objUserMaster,'form'=>$form,'arrStates'=>$arrStates,'arrCountries'=>$arrCountries]);
	}

	/**
	 * Deactivate account
	 *
	 * @return view
	 */  
	public function deactivate_account(Request $request)
	{
		if(!$this->user_session->is_logged_in)
			return redirect()->route('login');

		$objUserMaster = $this->user_session;

		if($objUserMaster == null)
			return redirect()->route('login');

		return view('user.account',['objUserMaster'=>$objUserMaster]);
	}

	/**
	 * Orders function. Shows orders list
	 *
	 * @return view
	 */  
	public function orders(Request $request)
	{
		if(!$this->user_session->is_logged_in)
			return redirect()->route('login');

		return view('orders');
	}

	 /**
	 * Cart function. Shows user shopping cart
	 *
	 * @return view
	 */

    public function cart()
    {	
    	return view('user.cart');
    }

    /**
	 * Generate verification link and send
	 *
	 * @return view
	 */  
	public function generate_verify_link(Request $request,$token_type='')
	{
		if(!$this->user_session->is_logged_in)
			return redirect()->route('login');

		$objUserMaster = $this->user_session;

		if($objUserMaster == null)
			return redirect()->route('login');


		if(in_array($token_type,config('global.token_types')))
		{
			$objTokenMaster = App\TokenMaster::where('user_id',$objUserMaster->user_id)
				->where('expire_on','>',date('Y-m-d H:i:s',time()))
				->where('status',1)->first();	
			
			if($objTokenMaster != null)
			{
				$_SESSION['message'] = 'We already have sent you an email verification link. Plase check your inbox.';
				return redirect()->route('account');
			}

			//generate link and send
			generate_and_send_email_verification_email($objUserMaster);

			$_SESSION['message'] = 'Verification email has been sent successfully.';
		}
		else
		{
			$_SESSION['message'] = 'Invalid token type. Please try again.';
		}

		return redirect()->route('account');
	}
}
