<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AyamSeeder extends Seeder
{
    public function run(): void
    {
     DB::table('ayam')->insert([
    [
        'nama' => 'Ayam boston',
        'stok' => 10,
        'harga' => 20000,
        'description' => 'Ayam bakar dengan bumbu khas tradisional.',
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nama' => 'Ayam sweeter',
        'stok' => 15,
        'harga' => 18000,
        'description' => 'Ayam goreng renyah dan gurih.',
        'user_id' => 2,
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);

    }
}
