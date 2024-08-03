<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    use HasFactory;


    protected $table = 'raport';

    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'tempat_lahir',
        'tanggal_lahir',
        'tanggal_cetak_raport'
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
