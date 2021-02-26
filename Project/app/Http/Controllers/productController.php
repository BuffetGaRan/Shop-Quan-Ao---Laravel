<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_category;
use App\product;
use App\gender;

class productController extends Controller
{
    public function getList(){
    	$product = product::all();
        $product = product::paginate(4);
        return view('Frontend.master', ['product' => $product]);
    }

    // public function getListMale(){
    //     $gender = gender::find(1);
    //     foreach($gender->product as $product){
    //         echo $product->name."<br>";
    //     }
    // }

    // public function getListFemale(){
    //     $gender = gender::find(2);
    //     foreach($gender->product as $product){
    //         echo $product->name."<br>";
    //     }
    // }

   	// public function getAdd(){
    // 	$product_category = product_category::all();
    // 	$gender = gender::all();
    // 	return view('Admin.Product.addNew', ['product_category' => $product_category, 'gender' => $gender]);
    // }
}
