<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasSekolah extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'identitas_sekolah';

    protected $fillable = [
        'npsn',
        'jenjang',
        'status_akreditasi',
        'lokasi',
        'semester',
        'tahun_ajaran',
        'nama_kepala',
        'nip',
        'nama_admin',
        'jabatan'
    ];
}
