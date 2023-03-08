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
        Schema::create('satwa_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_satwa');
            $table->string('kategori');
            $table->date('tgl_masuk');
            $table->string('foto');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satwa_masuk');
    }
};
