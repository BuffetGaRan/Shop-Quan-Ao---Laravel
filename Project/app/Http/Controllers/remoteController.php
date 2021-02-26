<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\image;
use App\product_category;

class remoteController extends Controller
{
    public function getMaster(){
    	$hot = product::where('hot', '!=',  '0')->paginate(4);
        $season = product::paginate(4);
        $bestsell = product::orderBy('selled', 'DESC')->paginate(6);
        $men = product::where('gender_id', '1')->paginate(4);
        $image = image::all();
        return view('Frontend.Layouts.contentMaster', ['hot' => $hot, 'season' => $season, 'bestsell' => $bestsell, 'men' => $men,  'image' => $image]);
    }

    public function getDetail($id){
        $id = $id;
        $product = product::where('id', $id)->get();
        $suggestion = product::where([['gender_id', $product[0]->gender_id], ['product_category_id', $product[0]->product_category_id]])->paginate(4);
        return view('Frontend.Layouts.contentDetail', ['product' => $product, 'suggestion' => $suggestion, 'id' => $id]);
    }

    public function getProduct(){
        $product = product::orderBy('created_at', 'DESC')->paginate(10);
        $toHigh = product::orderBy('price', 'ASC')->paginate(10);
        $toLow = product::orderBy('price', 'DESC')->paginate(10);
        $toOld = product::orderBy('created_at', 'ASC')->paginate(10);
        $product_category = product_category::all();
        $countProduct = product::all()->count();
        return view('Frontend.Layouts.contentProduct',
            [
                'product' => $product,
                'toHigh' => $toHigh,
                'toLow' => $toLow,
                'toOld' => $toOld,
                'product_category' => $product_category,
                'countProduct' => $countProduct,
            ]
        );
    }
}
