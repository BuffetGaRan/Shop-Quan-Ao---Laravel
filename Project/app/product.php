<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';

    public function product(){
    	return $this->belongsTo('App\gender', 'App\product_category', 'gender_id','product_category_id', 'id');
    }
}
