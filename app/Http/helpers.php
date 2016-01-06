<?php
	
function getKeyValueArray($key,$value,$input_array)
{
	$output_array = array();

	foreach ($input_array as $val) {
		$output_array[$val[$key]] = $val[$value];
	}

	return $output_array;
}

function login($user_name,$user_id,$user_email,$remember_me = false)
{
	//session_start();
	
	$_SESSION['elegance_cut_user']['user_name'] = $user_name;
	$_SESSION['elegance_cut_user']['user_id'] = $user_id;
	$_SESSION['elegance_cut_user']['user_email'] = $user_email;

	$cookie_name = 'elegance_cut_user';
	$cookie_value = $user_name;

	if($remember_me)
	{
		setcookie('elegance_cut_user', $user_id, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie('elegance_cut_user_email', $user_email, time() + (86400 * 30), "/"); // 86400 = 1 day
		$_SESSION['elegance_cut_user']['session_expire'] = time() + 604800;
	}
	else{
		setcookie('elegance_cut_user', $user_id, time() + (86400), "/"); // 86400 = 1 day
		setcookie('elegance_cut_user_email', $user_email, time() + (86400), "/"); // 86400 = 1 day
	}
}

function logout()
{
	unset($_SESSION['elegance_cut_user']);

	setcookie('elegance_cut_user', '', time() - (86400 * 30), "/"); // 86400 = 1 day
	setcookie('elegance_cut_user_email','', time() - (86400 * 30), "/"); // 86400 = 1 day	
}

function validate_session()
{
	$user = new stdClass();

	if(!isset($_SESSION['elegance_cut_user']['user_name']) || !isset($_SESSION['elegance_cut_user']['user_id']) || !isset($_SESSION['elegance_cut_user']['user_email']))
	{
		$user->is_logged_in = false;
		return $user;
	}

	$objUser = App\UserMaster::find($_SESSION['elegance_cut_user']['user_id'])->first();

	if($objUser == NULL || $objUser->fname != $_SESSION['elegance_cut_user']['user_name'] || $objUser->email != $_SESSION['elegance_cut_user']['user_email'])	
	{
		logout();
		$user->is_logged_in = false;
		return $user;
	}
	else
	{
		$objUser->is_logged_in = true;
		return $objUser;
	}
}