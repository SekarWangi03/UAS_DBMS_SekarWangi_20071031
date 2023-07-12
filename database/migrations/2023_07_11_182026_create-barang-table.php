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
        Schema::create('t_bagian_sw', function (Blueprint $table) {
            $table->id();
            $table->string('bagian_id', 30);
            $table->string('nama_bagian', 45);
            $table->string('kepala_bagian', 45);
            $table->string('telp', 45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bagian_sw');
    }
};
