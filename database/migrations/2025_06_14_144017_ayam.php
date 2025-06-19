<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ayam extends Migration
{
    public function up()
    {
        Schema::create('ayam', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama');
            $table->text('description')->nullable();
            $table->decimal('harga', 12, 2);
            $table->string('gambar')->nullable();
            $table->boolean('stok')->default(true);
            $table->timestamps();
        });
         
    }

    public function down()
    {
        Schema::dropIfExists('ayam');
    }
}
