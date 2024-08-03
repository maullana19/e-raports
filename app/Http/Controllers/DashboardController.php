<?php

namespace App\Http\Controllers;

use App\Models\IdentitasSekolah;
use App\Models\Kelas;
use App\Models\Periodik;
use App\Models\Siswa;
use App\Models\NilaiSiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $totalSiswa = $siswa->count();
        $totalKelas = $kelas->count();
        $totalNilai = NilaiSiswa::all()->count();
        $totalPeriodik = Periodik::all()->count();
        $dataSekolah = IdentitasSekolah::all();

        return view('dashboard', compact('totalSiswa', 'totalKelas', 'totalNilai', 'totalPeriodik', 'dataSekolah'));
    }

    public function editIdentitas($id)
    {
        $identitas = IdentitasSekolah::find($id);

        if (!$identitas) {
            abort(404);
        }

        return view('edit_identitas', compact('identitas'));
    }

    public function updateIdentitas(Request $request, $id)
    {
        $identitas = IdentitasSekolah::findOrFail($id);

        $identitas->update($request->only([
            'npsn',
            'jenjang',
            'status_akreditasi',
            'lokasi',
            'semester',
            'tahun_ajaran',
            'nama_kepala',
            'nip',
            'nama_admin',
            'jabatan',
        ]));

        return redirect()->route('dashboard')->with('success', 'Identitas sekolah berhasil diperbarui.');
    }
}
