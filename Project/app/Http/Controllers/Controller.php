<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage($dir='/images/product', $file){
    	$name = time().'.'.$file->getClientOriginalExtension();
    	$detinationPath = public_path($dir);
    	if(!is_dir($detinationPath)){
    		mkdir($detinationPath);
    	}
    	$file->move($detinationPath, $name);
    	$url = $dir.'/'.$name;
    	return $url;
    }
}
