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
        Schema::table('t_barang_sw', function (Blueprint $table) {
            $table->renameColumn('from id', 'to id_barang');
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
        Schema::dropIfExists('t_barang_sw');
    }
};
