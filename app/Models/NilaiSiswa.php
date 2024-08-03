<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSiswa extends Model
{
    use HasFactory;

    protected $table = 'nilai';
    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'semester',
        'tahun_pelajaran',
        'nilai_a1',
        'nilai_a2',
        'nilai_a3',
        'nilai_a4',
        'ases_a1',
        'ases_a2',
        'ases_a3',
        'ases_a4',
        'nilai_b1',
        'nilai_b2',
        'nilai_b3',
        'nilai_b4',
        'ases_b1',
        'ases_b2',
        'ases_b3',
        'ases_b4',
        'nilai_c1',
        'nilai_c2',
        'nilai_c3',
        'nilai_c4',
        'nilai_c5',
        'nilai_c6',
        'nilai_c7',
        'ases_c1',
        'ases_c2',
        'ases_c3',
        'ases_c4',
        'ases_c5',
        'ases_c6',
        'ases_c7',
        'tema_p5',
        'nilai_p5',
        'deskripsi_nilai_a',
        'deskripsi_nilai_b',
        'deskripsi_nilai_c',
        'deskripsi_nilai_p5',
        'deskripsi_umum_p5',
        'foto_kegiatan_a1',
        'foto_kegiatan_a2',
        'foto_kegiatan_a3',
        'foto_kegiatan_b1',
        'foto_kegiatan_b2',
        'foto_kegiatan_b3',
        'foto_kegiatan_c1',
        'foto_kegiatan_c2',
        'foto_kegiatan_c3',
        'foto_kegiatan_p1',
        'foto_kegiatan_p2',
        'foto_kegiatan_p3',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
