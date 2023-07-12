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
        Schema::create('t_barang_sw', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 45);
            $table->string('satuan', 45);
            $table->string('harga', 45);
            $table->string('kategori_id', 45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_barang_sw');
    }
};
