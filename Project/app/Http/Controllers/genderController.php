<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gender;

class genderController extends Controller
{
    public function getList(){
    	$gender = gender::all();
    }

    public function getAdd(){
    	return view('Admin.Gender.addNew');
    }

    public function postAdd(Request $request){
    	$gender = new gender;
    	$gender->name = $request->name;
    	$gender->save();

    	return redirect('admin/gender/addNew');
    }
}
