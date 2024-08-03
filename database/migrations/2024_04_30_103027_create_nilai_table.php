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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained()->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained()->onDelete('cascade');
            $table->string('semester');
            $table->string('tahun_pelajaran');
            $table->string('nilai_a1');
            $table->string('nilai_a2');
            $table->string('nilai_a3');
            $table->string('nilai_a4');
            $table->string('ases_a1');
            $table->string('ases_a2');
            $table->string('ases_a3');
            $table->string('ases_a4');
            $table->string('nilai_b1');
            $table->string('nilai_b2');
            $table->string('nilai_b3');
            $table->string('nilai_b4');
            $table->string('ases_b1');
            $table->string('ases_b2');
            $table->string('ases_b3');
            $table->string('ases_b4');
            $table->string('nilai_c1');
            $table->string('nilai_c2');
            $table->string('nilai_c3');
            $table->string('nilai_c4');
            $table->string('nilai_c5');
            $table->string('nilai_c6');
            $table->string('nilai_c7');
            $table->string('ases_c1');
            $table->string('ases_c2');
            $table->string('ases_c3');
            $table->string('ases_c4');
            $table->string('ases_c5');
            $table->string('ases_c6');
            $table->string('ases_c7');
            $table->string('tema_p5')->nullable();
            $table->string('nilai_p5')->nullable();
            $table->text('deskripsi_nilai_a');
            $table->text('deskripsi_nilai_b');
            $table->text('deskripsi_nilai_c');
            $table->text('deskripsi_nilai_p5')->nullable();
            $table->text('deskripsi_umum_p5')->nullable();
            $table->string('foto_kegiatan_a1')->nullable();
            $table->string('foto_kegiatan_a2')->nullable();
            $table->string('foto_kegiatan_a3')->nullable();
            $table->string('foto_kegiatan_b1')->nullable();
            $table->string('foto_kegiatan_b2')->nullable();
            $table->string('foto_kegiatan_b3')->nullable();
            $table->string('foto_kegiatan_c1')->nullable();
            $table->string('foto_kegiatan_c2')->nullable();
            $table->string('foto_kegiatan_c3')->nullable();
            $table->string('foto_kegiatan_p1')->nullable();
            $table->string('foto_kegiatan_p2')->nullable();
            $table->string('foto_kegiatan_p3')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_siswa');
    }
};
