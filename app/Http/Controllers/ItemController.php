<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use DB;
use Config;

class ItemController extends Controller
{
    public function index(Request $request,$item_id = '')
    {
    	if($item_id != '')
    	{
    		$objItem = App\ItemMaster::where('item_id',$item_id)->where('status',1)->first();

    		if(null != $objItem)
    		{
    			//fetch all the categories
		    	$objCategory = App\CategoryMaster::all();

		    	//fetch all the item types
		    	$objType = App\TypeMaster::all();

		    	//get category id versus category name array
		    	$arrCetegory_id_obj = getKeyValueArray('cat_id','name',$objCategory,'object',true);

		    	$arrType_id_obj = getKeyValueArray('type_id','name',$objType,'object',true);

		    	//other product images
		    	$objProductImages = array();

    			return view('product.product',compact('objProductImages','objItem','objCategory','objType','arrCetegory_id_obj','arrType_id_obj'));
    		}
    		else
    		{
    			abort(404);
    		}
    	}
    	else
    	{
    		abort(404);
    	}
    }
}
