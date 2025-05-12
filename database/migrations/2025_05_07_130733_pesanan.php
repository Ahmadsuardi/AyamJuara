<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class pesanan extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('status', ['Menunggu', 'Dikonfirmasi', 'Dibatalkan']);
            $table->enum('metode_pembayaran', ['COD', 'Transfer', 'E-Wallet']);
            $table->text('alamat_pengiriman');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
