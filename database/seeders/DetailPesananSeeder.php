<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPesananSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('detail_pesanan')->insert([
            [
                'pesanan_id' => 1,
                'ayam_id' => 1,
                'jumlah' => 2,
                'subtotal' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pesanan_id' => 2,
                'ayam_id' => 2,
                'jumlah' => 1,
                'subtotal' => 18000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
