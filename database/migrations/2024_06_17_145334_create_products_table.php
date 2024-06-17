<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->unsignedInteger('cat_id');
            $table->unsignedInteger('brand_id');
            $table->string('product_name');
            $table->integer('price_origin');
            $table->integer('product_price');
            $table->text('description')->nullable();
            $table->string('product_image')->nullable();
            $table->timestamps();

            $table->foreign('cat_id')->references('cat_id')->on('product_categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('brand_id')->on('brands')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
