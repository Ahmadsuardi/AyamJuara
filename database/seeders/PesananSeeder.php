<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pesanan')->insert([
            [
                'user_id' => 1,
                'tanggal_pesanan' => now(),
                'status' => 'selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'tanggal_pesanan' => now(),
                'status' => 'proses',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
