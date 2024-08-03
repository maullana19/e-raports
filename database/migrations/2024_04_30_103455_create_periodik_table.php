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
        Schema::create('periodik', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained()->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained()->onDelete('cascade');
            $table->string('semester');
            $table->string('tahun_pelajaran');
            $table->string('umur');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('keterangan_tinggi');
            $table->string('keterangan_berat');
            $table->string('lingkar_kepala');
            $table->string('izin');
            $table->string('sakit');
            $table->string('tanpa_keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodik');
    }
};
