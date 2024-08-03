<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\NilaiEkstrakulikuler;
use App\Models\Raport;
use App\Models\NilaiSiswa;
use App\Models\Periodik;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RaportController extends Controller
{
    public function index()
    {
        $dataSiswa = Siswa::all();
        $dataKelas = Kelas::all();

        return view('raport', compact(
            'dataSiswa',
            'dataKelas'
        ));
    }

    public function inputRaport(Request $request)
    {
        $data = $request->validate([
            'siswa_id' => 'required',
            'no_induk_siswa' => 'required',
            'kelas_id' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_cetak_raport' => 'required',
        ]);

        Raport::create($data);

        return redirect()->route('raport')->with('success', 'Data raport berhasil ditambahkan');
    }

    // public function cetakCoverRaportPDF(Request $request)
    // {
    //     $siswaId = $request->input('siswa_id');
    //     $siswa = Siswa::find($siswaId);
    //     $tanggalCetakRaport = $request->input('tanggal_cetak_raport');


    //     if (!$siswa) {
    //         abort(404);
    //     }

    //     $data = [
    //         'siswa' => $siswa,
    //         'tanggal_cetak_raport' => $tanggalCetakRaport,
    //     ];

    //     $pdf = Pdf::loadView('pdf.coverPDF', $data);

    //     return $pdf->stream('cover_raport.pdf');
    // }

    // public function cetakRaportPDF(Request $request)
    // {
    //     $nilai_id = $request->input('nilai_id');
    //     $nilai = NilaiSiswa::find($nilai_id);
    //     $tanggalCetakRaport = $request->input('tanggal_cetak_raport');


    //     if (!$nilai) {
    //         abort(404);
    //     }

    //     $data = [
    //         'nilai' => $nilai,
    //         'tanggal_cetak_raport' => $tanggalCetakRaport,

    //     ];

    //     $pdf = Pdf::loadView('pdf.raportPDF', $data);

    //     return $pdf->stream('raport.pdf');
    // }

    public function cetakPDF(Request $request)
    {
        $action = $request->input('action');
        $siswaId = $request->input('siswa_id');
        $noIndukSiswa = $request->input('no_induk_siswa');
        $kelasId = $request->input('kelas_id');
        $tanggalLahir = $request->input('tanggal_lahir');
        $tempatLahir = $request->input('tempat_lahir');
        $tanggalCetakRaport = $request->input('tanggal_cetak_raport');

        if ($action === 'cover') {
            $siswa = Siswa::find($siswaId);
            $view = 'pdf.coverPDF';
        } elseif ($action === 'raport') {
            $nilai = NilaiSiswa::where('siswa_id', $siswaId)->first();
            $periodik = Periodik::where('siswa_id', $siswaId)->first();
            $ekstrakurikuler = NilaiEkstrakulikuler::where('siswa_id', $siswaId)->first();
            $view = 'pdf.raportPDF';
        } else {
            abort(404);
        }

        if (empty($siswa) && empty($nilai)) {
            abort(404);
        }

        $data = [
            'siswa' => $siswa ?? null,
            'nilai' => $nilai ?? null,
            'periodik' => $periodik ?? null,
            'ekstrakurikuler' => $ekstrakurikuler ?? null,
            'tanggal_lahir' => $tanggalLahir,
            'tempat_lahir' => $tempatLahir,
            'tanggal_cetak_raport' => $tanggalCetakRaport,
        ];

        $pdf = Pdf::loadView($view, $data);

        return $pdf->stream('raport.pdf');
    }
}
