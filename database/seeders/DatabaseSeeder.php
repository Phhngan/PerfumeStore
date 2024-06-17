<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call((ProductsDatabase::class));
        $this->call((ProductDetailsDatabase::class));
        $this->call((BrandsDatabase::class));
        $this->call((CategoriesDatabase::class));
        $this->call((UserDatabase::class));
    }
}
