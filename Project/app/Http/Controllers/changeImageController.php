<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;

class changeImageController extends Controller
{
    public function ChangeImage(Request $request){
    	$image = image::all();

    	if($request->hasFile('image_header')){
    		
            $header = $request->file('image_header');
            $nameHeader = time().'_'.$header->getClientOriginalName();
            $header->move('Upload', $nameHeader);

            foreach($image as $item){
        		$item->header = $nameHeader;
        		$item->save();
	    	}
        }else{
        	foreach($image as $item){
        		$item->header = $item->header;
        		$item->save();
	    	}
        }

        if($request->hasFile('image_slide_1')){
    		
            $slide1 = $request->file('image_slide_1');
            $nameSlide1 = time().'_'.$slide1->getClientOriginalName();
            $slide1->move('Upload', $nameSlide1);

            foreach($image as $item){
        		$item->slide1 = $nameSlide1;
        		$item->save();
	    	}
        }else{
        	foreach($image as $item){
        		$item->slide1 = $item->slide1;
        		$item->save();
	    	}
        }

        if($request->hasFile('image_slide_2')){
    		
            $slide2 = $request->file('image_slide_2');
            $nameSlide2 = time().'_'.$slide2->getClientOriginalName();
            $slide2->move('Upload', $nameSlide2);

            foreach($image as $item){
        		$item->slide2 = $nameSlide2;
        		$item->save();
	    	}
        }else{
        	foreach($image as $item){
        		$item->slide2 = $item->slide2;
        		$item->save();
	    	}
        }

        if($request->hasFile('image_slide_3')){
    		
            $slide3 = $request->file('image_slide_3');
            $nameSlide3 = time().'_'.$slide3->getClientOriginalName();
            $slide3->move('Upload', $nameSlide3);

            foreach($image as $item){
        		$item->slide3 = $nameSlide3;
        		$item->save();
	    	}
        }else{
        	foreach($image as $item){
        		$item->slide3 = $item->slide3;
        		$item->save();
	    	}
        }

        if($request->hasFile('image_banner_1')){
    		
            $banner1 = $request->file('image_banner_1');
            $nameBanner1 = time().'_'.$banner1->getClientOriginalName();
            $banner1->move('Upload', $nameBanner1);

            foreach($image as $item){
        		$item->banner1 = $nameBanner1;
        		$item->save();
	    	}
        }else{
        	foreach($image as $item){
        		$item->banner1 = $item->banner1;
        		$item->save();
	    	}
        }

        if($request->hasFile('image_banner_2')){
    		
            $banner2 = $request->file('image_banner_2');
            $nameBanner2 = time().'_'.$banner2->getClientOriginalName();
            $banner2->move('Upload', $nameBanner2);

            foreach($image as $item){
        		$item->banner2 = $nameBanner2;
        		$item->save();
	    	}
        }else{
        	foreach($image as $item){
        		$item->banner2 = $item->banner2;
        		$item->save();
	    	}
        }

        if($request->hasFile('image_men')){
    		
            $men = $request->file('image_men');
            $nameMen = time().'_'.$men->getClientOriginalName();
            $men->move('Upload', $nameMen);

            foreach($image as $item){
        		$item->men = $nameMen;
        		$item->save();
	    	}
        }else{
        	foreach($image as $item){
        		$item->men = $item->men;
        		$item->save();
	    	}
        }

        if($request->hasFile('image_women')){
    		
            $women = $request->file('image_women');
            $nameWomen = time().'_'.$women->getClientOriginalName();
            $women->move('Upload', $nameWomen);

            foreach($image as $item){
        		$item->women = $nameWomen;
        		$item->save();
	    	}
        }else{
        	foreach($image as $item){
        		$item->women = $item->women;
        		$item->save();
	    	}
        }

        return redirect('/');
    }
}
