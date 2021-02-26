<?php

use Illuminate\Database\Seeder;

class product_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $product_category = [
    		['name' => 'shirt'],
        	['name' => 'pants'],
    	];

    	\DB::table('product_category')->insert($product_category);
    }
}
