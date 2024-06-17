<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserDatabase extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory()->create(
            [
                'name' => 'admin',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('123456'),
            ]
        );
    }
}
