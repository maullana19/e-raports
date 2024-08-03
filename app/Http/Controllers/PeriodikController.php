<?php

namespace App\Http\Controllers;

use App\Models\Periodik;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;

class PeriodikController extends Controller
{
    public function index()
    {
        $dataPeriodik = Periodik::all();
        return view('periodik', compact('dataPeriodik'));
    }

    public function formInputPeriodik()
    {

        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('input_periodik', compact('siswa', 'kelas'));
    }

    public function prosesInputPeriodik(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'kelas_id' => 'required',
            'semester' => 'required',
            'tahun_pelajaran' => 'required',
            'umur' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'keterangan_tinggi' => 'required',
            'keterangan_berat' => 'required',
            'lingkar_kepala' => 'required',
            'izin' => 'required',
            'sakit' => 'required',
            'tanpa_keterangan' => 'required',
        ]);

        Periodik::create([
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
            'semester' => $request->semester,
            'tahun_pelajaran' => $request->tahun_pelajaran,
            'umur' => $request->umur,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'keterangan_tinggi' => $request->keterangan_tinggi,
            'keterangan_berat' => $request->keterangan_berat,
            'lingkar_kepala' => $request->lingkar_kepala,
            'izin' => $request->izin,
            'sakit' => $request->sakit,
            'tanpa_keterangan' => $request->tanpa_keterangan,
        ]);

        return redirect('/periodik')->with('successPeriodik', 'Data Periodik Siswa Berhasil Ditambahkan!');
    }

    public function editPeriodik($id)
    {
        $dataPeriodik = Periodik::find($id);
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('edit_periodik', compact('dataPeriodik', 'siswa', 'kelas'));
    }

    public function prosesEditPeriodik(Request $request, $id)
    {
        $periodik = Periodik::find($id);

        $request->validate([
            'siswa_id' => 'required',
            'kelas_id' => 'required',
            'semester' => 'required',
            'tahun_pelajaran' => 'required',
            'umur' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'keterangan_tinggi' => 'required',
            'keterangan_berat' => 'required',
            'lingkar_kepala' => 'required',
            'izin' => 'required',
            'sakit' => 'required',
            'tanpa_keterangan' => 'required',
        ]);

        $periodik->siswa_id = $request->siswa_id;
        $periodik->kelas_id = $request->kelas_id;
        $periodik->semester = $request->semester;
        $periodik->tahun_pelajaran = $request->tahun_pelajaran;
        $periodik->umur = $request->umur;
        $periodik->tinggi_badan = $request->tinggi_badan;
        $periodik->berat_badan = $request->berat_badan;
        $periodik->keterangan_tinggi = $request->keterangan_tinggi;
        $periodik->keterangan_berat = $request->keterangan_berat;
        $periodik->lingkar_kepala = $request->lingkar_kepala;
        $periodik->izin = $request->izin;
        $periodik->sakit = $request->sakit;
        $periodik->tanpa_keterangan = $request->tanpa_keterangan;
        $periodik->save();

        return redirect('/periodik')->with('successPeriodik', 'Data Periodik Siswa Berhasil Diubah!');
    }

    public function deletePeriodik($id)
    {
        $periodik = Periodik::find($id);
        $periodik->delete();
        return redirect('/periodik')->with('successPeriodik', 'Data Periodik Siswa Berhasil Dihapus!');
    }
}
