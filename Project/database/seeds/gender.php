<?php

use Illuminate\Database\Seeder;

class gender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	$gender = [
    		['name' => 'male'],
        	['name' => 'female']
    	];

        \DB::table('gender')->insert($gender);
    }
}
