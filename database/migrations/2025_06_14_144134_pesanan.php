<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class pesanan extends Migration
{
   public function up(): void
{
    Schema::create('pesanan', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->date('tanggal_pesanan'); // ← TAMBAHKAN INI
        $table->enum('status', ['proses', 'selesai', 'batal']);
        $table->timestamps();
    });
}
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
