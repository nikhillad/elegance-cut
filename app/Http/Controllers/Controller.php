<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $user_session = array();

	 function __construct() {
	 	 session_start();

	 	 $this->user_session = validate_session();

	 	 if(!isset($_SESSION['elegance_cut_user']['session_expire']))
	 	 	$_SESSION['elegance_cut_user']['session_expire'] = time()+3600;
	 	 else if($_SESSION['elegance_cut_user']['session_expire'] < time())
	 	 {
	 	 	logout();
	 	 	$_SESSION['elegance_cut_user']['session_expire'] = time()+3600;
	 	 }
	 }
}
