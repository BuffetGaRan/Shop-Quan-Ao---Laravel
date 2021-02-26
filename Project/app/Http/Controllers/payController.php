<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;
use Auth;

class payController extends Controller
{
    public function addData(){
    	$email = Auth::user()->email;
    	$address = Auth::user()->address;
    	$phone = Auth::user()->phone;
		foreach(session('cart') as $id => $details){
			$cart = new cart;
			$cart->name = $details['name'];
	    	$cart->price = $details['price'];
	    	$cart->image = $details['photo'];
	    	$cart->amount = $details['quantity'];
	    	$cart->user = $email;
	    	$cart->phone = $phone;
	    	$cart->address = $address;
	    	$cart->ship = 0;
	    	$cart->save();
		}
 		session()->remove('cart');
    	return '<a href="/">Bạn đã đặt đơn hàng thành công, hãy chờ hàng về</a>';
    }

    public function addData2(Request $request){
    	foreach(session('cart') as $id => $details){
			$cart = new cart;
			$cart->name = $details['name'];
	    	$cart->price = $details['price'];
	    	$cart->image = $details['photo'];
	    	$cart->amount = $details['quantity'];
	    	$cart->user = $request->email;
	    	$cart->phone = $request->phone;
	    	$cart->address = $request->address;
	    	$cart->ship = 0;
	    	$cart->save();
		}
 		session()->remove('cart');
    	return '<a href="/">Bạn đã đặt đơn hàng thành công, hãy chờ hàng về</a>';
    }
}
