<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailsDatabase extends Seeder
{
    public function run(): void
    {
        DB::table('product_details')->insert(
            [
                [
                    'product_id' => 1,
                    'size' => 450,
                    'quantity' => 10,
                    'product_status_id' => 1,
                ],
                [
                    'product_id' => 2,
                    'size' => 450,
                    'quantity' => 10,
                    'product_status_id' => 1,
                ],
                [
                    'product_id' => 3,
                    'size' => 450,
                    'quantity' => 10,
                    'product_status_id' => 1,
                ],
            ]
        ); 
    }
}
