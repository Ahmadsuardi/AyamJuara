<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
      DB::table('users')->insert([
    [
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('12345678'),
        'role' => 'admin',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'User Biasa',
        'email' => 'user@gmail.com',
        'password' => Hash::make('12345678'),
        'role' => 'pembeli',
        'created_at' => now(),
        'updated_at' => now(),
    ],

     [
        'name' => 'Penjual',
        'email' => 'penjual@gmail.com',
        'password' => Hash::make('12345678'),
        'role' => 'penjual',
        'created_at' => now(),
        'updated_at' => now(),
    ]
]);

    }
}
