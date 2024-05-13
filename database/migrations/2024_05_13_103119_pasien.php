<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create ('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien', 45);
            $table->string('keterangan', 45);
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfexists('pasien');
    }
};
