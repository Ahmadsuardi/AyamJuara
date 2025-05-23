<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class userprofile extends Migration
{
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('alamat');
            $table->string('telepon');
            $table->text('preferensi')->nullable();
            $table->timestamps();
        });
         
    }

    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
