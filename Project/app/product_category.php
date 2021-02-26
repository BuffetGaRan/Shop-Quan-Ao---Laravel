<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $table = 'product_category';

    public function product(){
    	return $this->hasMany('App\product', 'product_category_id', 'id');
    }
}
