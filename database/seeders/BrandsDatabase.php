<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsDatabase extends Seeder
{
   public function run(): void
    {
        DB::table('brands')->insert(
            [
                [
                    'brand_name' => '',
                    'brand_email' => 'unit1@gmail.com',
                ],
                [
                    'brand_name' => '',
                    'brand_email' => 'unit1@gmail.com',
                ],
                [
                    'brand_name' => '',
                    'brand_email' => 'unit1@gmail.com',
                ],
            ]
        );
    }
}
