<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_category;

class product_categoryController extends Controller
{

	public function getList(){
    	
    }

   	public function getAdd(){
    	return view('Admin.Product_Category.addNew');
    }

    public function postAdd(Request $request){
    	$product_category = new product_category;
    	$product_category->name = $request->name;
    	$product_category->save();

    	return redirect('admin/product_category/addNew');
    }
}
