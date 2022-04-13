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
        Schema::create('product', function (Blueprint $product) {
            $product -> increments('productid') ;
            $product -> string('productname');
            $product -> string('price');
            $product -> integer('category')->unsigned();
            $product -> integer('color')->unsigned();
            $product -> string('description');
            $product -> string('image');
            $product -> string('image2');
            $product -> string('image3');
            $product -> string('image4');
            $product -> string('image5');

            // $product->foreign('category')->references('categoryid')->on('category');
            // $product->foreign('color')->references('colorid')->on('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}