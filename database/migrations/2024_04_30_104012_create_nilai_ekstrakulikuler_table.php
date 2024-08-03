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
        Schema::create('nilai_ekstrakulikuler', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained()->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained()->onDelete('cascade');
            $table->string('nama_keg_1');
            $table->string('nama_keg_2');
            $table->string('nama_keg_3');
            $table->string('nama_keg_4');
            $table->string('nama_keg_5');
            $table->string('nilai_keg_1');
            $table->string('nilai_keg_2');
            $table->string('nilai_keg_3');
            $table->string('nilai_keg_4');
            $table->string('nilai_keg_5');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_ekstrakulikuler');
    }
};
