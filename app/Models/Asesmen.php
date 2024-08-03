<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesmen extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'assesmen';

    protected $fillable = [
        'nama_assesmen',
        'ket_assesmen',
    ];
}
