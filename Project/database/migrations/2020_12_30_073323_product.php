<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->integer('price');
            $table->text('description');
            $table->integer('amount')->nullable()->default(1);
            $table->integer('selled')->nullable()->default(0);
            $table->integer('discount')->nullable()->default(0);
            $table->boolean('hot')->default(false);
            $table->integer('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('gender');
            $table->integer('product_category_id')->unsigned();
            $table->foreign('product_category_id')->references('id')->on('product_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
