<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use DB;
use Config;

class CartController extends Controller
{
    public function index()
    {
    	if($this->user_session->is_logged_in)
    		$user_id = $this->user_session->user_id;
    	else
    		$user_id = null;

    	//get cart details
    	if($this->user_session->is_logged_in)
    		$arrCartItems = DB::connection('mongodb')->collection('cart')->where('user_id',$user_id)->orWhere('session_id',session_id())->get();
    	else
    		$arrCartItems = DB::connection('mongodb')->collection('cart')->where('session_id',session_id())->get();
    	

    	$cart_total_price = 0;
    	$cart_total_items = 0;

    	foreach ($arrCartItems as $key => $value) {
    		$cart_total_price = $cart_total_price + ($value['price']*$value['qty']);
    		$cart_total_items++;

    		$item = App\ItemMaster::find($value['item_id']);

    		if(null != $item)
    			$objCartItems[$value['item_id']] = $item;
    		else
    			unset($arrCartItems[$key]);
    	}

    	$shipping_charges = 0;
    	$vat = 0;
    	$total_price = $cart_total_price + $shipping_charges + $vat;

    	return view('user.cart',compact('total_price','shipping_charges','vat','objCartItems','arrCartItems','cart_total_price','cart_total_items'));
    }

    public function remove_item(Request $request, $item_id = '')
    {
    	if($item_id != '')
    	{
    		if($this->user_session->is_logged_in)
    		{
    			$arrCartItems = DB::connection('mongodb')->collection('cart')
    							->where( function ( $query )
							    {
							        $query->where('user_id',(int)$this->user_session->user_id)
							            ->orWhere('session_id',session_id());
							    })
    							->where('item_id',(int)$item_id)->delete();
    		}
    		else
    		{
    			$arrCartItems = DB::connection('mongodb')->collection('cart')->where('session_id',session_id())->where('item_id',(int)$item_id)->delete();
    		}

    	}

    	return redirect()->route('cart');
    }

    public function change_qty(Request $request)
    {
    	$qty = $request->input('qty','');
    	$item_id = $request->input('item_id','');

    	if($qty != '' && $item_id != '' && $qty > 0)
    	{
    		//check if given qty is valid
    		$objItem = App\ItemMaster::where('item_id',$item_id)->where('status',1)->first();

    		if($objItem->qty==null)
                    $show_size_chart=true;

            if($show_size_chart==true)
            {
                //get item sizes
                $objSizes = DB::table('item_size_master')->where('item_id',$objItem->item_id)
                        ->join('size_master','size_master.size_id','=','item_size_master.size_id')
                        ->select('item_size_master.*','size_master.*')
                        ->get();

                $arrSize_id_size_code = getKeyValueArray('size_id','size_code',$objSizes,'object',false);        
            }

            $total_available_qty = 0; 
            if($show_size_chart)
            {
                foreach ($objSizes as $key => $value) {
                    $total_available_qty = $total_available_qty + $value->qty;
                }
            }
            else
            {
                if($objItem->qty != null)
                    $total_available_qty = $objItem->qty;
            }    

    		if($qty != '' && is_numeric($qty) && $qty <= $total_available_qty)
            {
	    		if($this->user_session->is_logged_in)
	    		{
	    			$objCartItem = App\CartMaster::where( function ( $query )
							    {
							        $query->where('user_id',(int)$this->user_session->user_id)
							            ->orWhere('session_id',session_id());
							    })
    							->where('item_id',(int)$item_id)->first();
	    		}
	    		else
	    		{
	    			$objCartItem = App\CartMaster::where('session_id',session_id())->where('item_id',(int)$item_id)->first();
	    		}

	    		$objCartItem->qty = $qty;
	    		$objCartItem->save();

	    		$return['error'] = false;
    		}
    		else
    		{
    			$return['error'] = true;
    			$return['message'] = 'The selected quantity is not available.';
    		}

    	}
    	else
    	{
    		$return['error'] = true;
    		$return['message'] = 'Invalid parameters.';
    	}

    	return json_encode($return);
    }
}
