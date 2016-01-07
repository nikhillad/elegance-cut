<?php
	
function getKeyValueArray($key,$value,$input_array)
{
	$output_array = array();

	foreach ($input_array as $val) {
		$output_array[$val[$key]] = $val[$value];
	}

	return $output_array;
}

function login($objUser,$remember_me = false)
{
	//session_start();
	
	$_SESSION['elegance_cut_user']['obj'] = $objUser;

	$cookie_name = 'elegance_cut_user';

	if($remember_me)
		$cookie_value = $objUser->fname.'-'.$objUser->user_id.'-'.$objUser->email.'-remember';
	else
		$cookie_value = $objUser->fname.'-'.$objUser->user_id.'-'.$objUser->email;

	if($remember_me)
	{
		setcookie($cookie_name, encryptCookie($cookie_value), time() + (86400 * 3650), "/"); // 86400 = 1 day, 10 Years
		$_SESSION['elegance_cut_user']['session_expire'] = time() + 86400; // 1 day
	}
	else{
		setcookie($cookie_name, encryptCookie($cookie_value), time() + (3600), "/"); // 3600 = 1 hour
		$_SESSION['elegance_cut_user']['session_expire'] = time() + 3600; // 1 hour
	}
}

function logout()
{
	unset($_SESSION['elegance_cut_user']);

	setcookie('elegance_cut_user', '', time() - (86400 * 30), "/"); // 86400 = 1 day	
}

function validate_session()
{
	$user = new stdClass();

	//check if all the session variable are in place
	if(isset($_SESSION['elegance_cut_user']) && isset($_SESSION['elegance_cut_user']['obj']))
	{
		if($_SESSION['elegance_cut_user']['session_expire'] > time())
		{
			$user = $_SESSION['elegance_cut_user']['obj'];
			$user->is_logged_in = true;
			return $user;
		}
		else if(isset($_COOKIE['elegance_cut_user']))
		{
			$arrayCookieVariables = getCookieVariables(decryptCookie($_COOKIE['elegance_cut_user']));

			if(in_array('remember', $arrayCookieVariables))
			{
				//restore session expire
				$_SESSION['elegance_cut_user']['session_expire'] = time() + 86400;
				$user = $_SESSION['elegance_cut_user']['obj'];
				$user->is_logged_in = true;
				return $user;
			}
			else
			{
				$_SESSION['elegance_cut_user']['session_expire'] = time() + 3600;
				$user = $_SESSION['elegance_cut_user']['obj'];
				$user->is_logged_in = true;
				return $user;
			}
		}
		else
		{
			logout();
			$user->is_logged_in = false;
			return $user;
		}
	}
	else
	{
		if(isset($_COOKIE['elegance_cut_user']))
		{
			$arrayCookieVariables = getCookieVariables(decryptCookie($_COOKIE['elegance_cut_user']));

			//get user data
			$objUser = App\UserMaster::find($arrayCookieVariables[1])->first();

			if(in_array('remember', $arrayCookieVariables))
			{
				//restore session expire
				$_SESSION['elegance_cut_user']['obj'] = $objUser;
				$_SESSION['elegance_cut_user']['session_expire'] = time() + 86400; // 1 day

				$user = $_SESSION['elegance_cut_user']['obj'];
				$user->is_logged_in = true;
				return $user;
			}
			else
			{
				//restore session expire
				$_SESSION['elegance_cut_user']['obj'] = $objUser;
				$_SESSION['elegance_cut_user']['session_expire'] = time() + 3600; // 1 hour

				$user = $_SESSION['elegance_cut_user']['obj'];
				$user->is_logged_in = true;
				return $user;
			}
		}
		else
		{
			logout();
			$user->is_logged_in = false;
			return $user;
		}
	}
}

function encryptCookie($value){
   if(!$value){return false;}
   $key = env('APP_KEY');
   $text = $value;
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, $iv);
   return trim(base64_encode($crypttext)); //encode for cookie
}

function decryptCookie($value){
   if(!$value){return false;}
   $key = env('APP_KEY');
   $crypttext = base64_decode($value); //decode cookie
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $crypttext, MCRYPT_MODE_ECB, $iv);
   return trim($decrypttext);
}

function getCookieVariables($cookie)
{
	return explode('-', $cookie);
}