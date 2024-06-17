<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsDatabase extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert(
            [
                [
                    'cat_id' => 1,
                    'brand_id' => 1,
                    'product_name' => '',
                    'price_origin' => 500000,
                    'product_price' => 1000000,
                    'description' => '',
                    'product_image' => '',
                ],
                [
                    'cat_id' => 1,
                    'brand_id' => 1,
                    'product_name' => '',
                    'price_origin' => 500000,
                    'product_price' => 1000000,
                    'description' => '',
                    'product_image' => '',
                ],
                [
                    'cat_id' => 1,
                    'brand_id' => 1,
                    'product_name' => '',
                    'price_origin' => 500000,
                    'product_price' => 1000000,
                    'description' => '',
                    'product_image' => '',
                ],
            ]
        );
    }
}