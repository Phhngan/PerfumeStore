<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesDatabase extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roduct_categories')->insert(
            [
                [
                    'cat_name' => 'Nước hoa Nam',
                    'cat_description' => 'Nước hoa dành cho Nam',
                ],
                [
                    'cat_name' => 'Nước hoa Nữ',
                    'cat_description' => 'Nước hoa dành cho Nữ',
                ],
                [
                    'cat_name' => 'Nước hoa Unisex',
                    'cat_description' => 'Nước hoa dùng được cho cả nam và nữ',
                ],
            ]
        ); 
    }
}
