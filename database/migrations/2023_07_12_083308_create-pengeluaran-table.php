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
        Schema::create('t_pengeluaran_sw', function (Blueprint $table) {
            $table->id();
            $table->string('no_bk', 10);
            $table->date('tanggal');
            $table->date('noreff');
            $table->string('bagian_id', 10);
            $table->string('petugas_id', 5);
            $table->string('keterangan', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pengeluaran_sw');
    }
};
