<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodik extends Model
{
    use HasFactory;

    public $table = "periodik";

    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'semester',
        'tahun_pelajaran',
        'umur',
        'tinggi_badan',
        'berat_badan',
        'keterangan_tinggi',
        'keterangan_berat',
        'lingkar_kepala',
        'izin',
        'sakit',
        'tanpa_keterangan'
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
