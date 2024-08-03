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
        Schema::create('identitas_sekolah', function (Blueprint $table) {
            $table->id();
            $table->integer('npsn');
            $table->string('status_akreditasi');
            $table->string('lokasi');
            $table->string('semester');
            $table->string('tahun_ajaran');
            $table->string('nama_kepala');
            $table->string('nip')->nullable();
            $table->string('jenjang');
            $table->string('nama_admin')->nullable();
            $table->string('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas_sekolah');
    }
};
