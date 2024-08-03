<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiEkstrakulikuler extends Model
{
    use HasFactory;

    protected $table = 'nilai_ekstrakulikuler';

    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'nama_keg-1',
        'nama_keg-2',
        'nama_keg-3',
        'nama_keg-4',
        'nama_keg-5',
        'nilai_keg_1',
        'nilai_keg_2',
        'nilai_keg_3',
        'nilai_keg_4',
        'nilai_keg_5',

    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
