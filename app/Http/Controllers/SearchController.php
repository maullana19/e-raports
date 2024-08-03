<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Periodik;
use App\Models\NilaiSiswa;
use App\Models\NilaiEkstrakulikuler;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        $siswas = Siswa::where('nama_siswa', 'like', "%{$search}%")
            ->orWhere('no_induk_siswa', 'like', "%{$search}%")
            ->paginate(10);


        return view('result', compact('siswas'));
    }
}
