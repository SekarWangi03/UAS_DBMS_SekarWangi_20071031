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
        Schema::create('t_petugas_sw', function (Blueprint $table) {
            $table->string('petugas_id', 10);
            $table->string('nama_petugas', 35);
            $table->string('alamat', 45);
            $table->string('handphone', 15);
            $table->string('password', 10);
            $table->string('level', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_petugas_sw');
    }
};
