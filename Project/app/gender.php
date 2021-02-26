<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    protected $table = 'gender';

    public function product(){
    	return $this->hasMany('App\product', 'gender_id', 'id');
    }
}
