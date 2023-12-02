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
        Schema::create('perkuliahan', function (Blueprint $table) {
            $table->id();
            $table->integer("Dosen_nidn");
            $table->integer("Mahasiswa Nim");
            $table->integer("Matajuliah_kode");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkuliahan');
    }
};
