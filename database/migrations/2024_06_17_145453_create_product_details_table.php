<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('product_id');
            $table->integer('size');
            $table->integer('quantity');
            $table ->integer('product_status_id');
            $table->timestamps();

            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_details');
    }
};
