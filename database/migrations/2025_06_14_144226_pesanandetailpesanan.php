<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class pesanandetailpesanan extends Migration
{
   public function up(): void
{
    Schema::create('detail_pesanan', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pesanan_id')->constrained('pesanan')->onDelete('cascade');
        $table->foreignId('ayam_id')->constrained('ayam')->onDelete('cascade');
        $table->integer('jumlah');
        $table->integer('subtotal'); // <--- tambahkan ini
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('detail_pesanan');
    }
}
