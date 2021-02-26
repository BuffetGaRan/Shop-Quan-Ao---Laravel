<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_category;
use App\product;
use App\gender;
use App\cart;

class adminController extends Controller
{
    public function View(){
    	$product = product::all();
        $hot = product::where('hot', '1')->get();
        $sale = product::where('discount', '!=' ,'0')->get();
        $male = product::where('gender_id', '1')->get();
        $female = product::where('gender_id', '2')->get();
        $countProduct = product::all()->count();
        $countHot = product::where('hot', '1')->count();
        $countSale = product::where('discount', '!=' ,'0')->count();
        $countMale = product::where('gender_id', '1')->count();
        $countFemale = product::where('gender_id', '2')->count();

        $cart = cart::orderBy('ship', 'ASC')->get();

        $duplicates = cart::select('user','phone', 'address', cart::raw('COUNT(*) as `count`'))
        ->groupBy('user', 'phone', 'address')
        ->having('count', '>', 1)
        ->get();

        $amount = array();
        $totalPrice = array();

        foreach($duplicates as $item){
            array_push($amount, cart::where('user', $item->user)->sum('amount'));
            array_push($totalPrice, cart::where('user', $item->user)->sum('price'));
        }

        // rsort($totalPrice);                

        $data = [
            'product' => $product,
            'hot' => $hot,
            'sale' => $sale,
            'male' => $male,
            'female' => $female,
            'countProduct' => $countProduct,
            'countHot' => $countHot,
            'countSale' => $countSale,
            'countMale' => $countMale,
            'countFemale' => $countFemale,
            'cart' => $cart,
            'duplicates' => $duplicates,
            'amount' => $amount,
            'totalPrice' => $totalPrice,
        ];

        // return $totalPrice;
    	return view('Admin.admin', $data);
    }

    public function postAdd(Request $request){
    	$product = new product;
    	$product->name = $request->name;
    	$product->price = $request->price;
    	$product->description = $request->desc;
    	$product->amount = $request->amount;
    	$product->discount = $request->discount;
    	if($request->hot == 'on'){
    		$product->hot = 1;
    	}
    	else{
    		$product->hot = 0;
    	}
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move('Upload', $name);
            $product->image = $name;
        }
        else{
            $product->image = '';
        }
    	$product->product_category_id = $request->product_category_id;
    	$product->gender_id = $request->gender_id;
    	$product->save();

    	return redirect('admin');
    }

    public function postUpdate(Request $request){
    	$product = product::find($request->update);

    	if(!empty($request->name)){
    		$product->name = $request->name;
    	}else{
			$product->name = $product->name;
    	}

    	if(!empty($request->price)){
    		$product->price = $request->price;
    	}else{
			$product->price = $product->price;
    	}
    	
    	if(!empty($request->desc)){
    		$product->description = $request->desc;
    	}else{
			$product->description = $product->description;
    	}
    	
    	if(!empty($request->amount)){
    		$product->amount = $request->amount;
    	}else{
			$product->amount = $product->amount;
    	}

    	if(!empty($request->discount)){
    		$product->discount = $request->discount;
    	}else{
			$product->discount = $product->discount;
    	}

    	// Xử lý hot or not
    	// -----------------------
    	if($request->hot == 'on'){
    		$request->hot = 1;
    	}else{
    		$request->hot = 0;
    	}

    	if($product->hot == $request->hot){
    		$product->hot = $product->hot;
    	}else{
	    	if($request->hot == 1){
    			$product->hot = 1;
	    	}else{
	    		$product->hot = 0;
	    	}
    	}

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $file->move('Upload', $name);
            $product->image = $name;
        }
        else{
            $product->image = $product->image;
        }

        if($product->product_category_id == $request->product_category_id){
    		$product->product_category_id = $product->product_category_id;
    	}else{
    		$product->product_category_id = $request->product_category_id;
    	}

    	if($product->gender_id == $request->gender_id){
    		$product->gender_id = $product->gender_id;
    	}else{
    		$product->gender_id = $request->gender_id;
    	}

    	$product->save();
    	return redirect('admin');
    }

    public function postDelete(Request $request){
    	$product = product::find($request->delete);
    	$product->delete();
    	return redirect('admin');
    }

    public function ship(Request $request){
        $cart = cart::find($request->id);
        $cart->ship = 1;
        $cart->save();
        return redirect('admin');
    }
}
