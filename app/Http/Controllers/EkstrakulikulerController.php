<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiEkstrakulikuler;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Asesmen;

class EkstrakulikulerController extends Controller
{
    public function index()
    {
        $dataEktrakurikuler = NilaiEkstrakulikuler::all();
        return view('ekstrakurikuler', compact('dataEktrakurikuler'));
    }

    public function ekstrakulikulerForm()
    {
        $dataSiswa = Siswa::all();
        $dataKelas = Kelas::all();
        $dataAssesmen = Asesmen::all();
        return view('input_ekstrakurikuler', compact('dataSiswa', 'dataKelas', 'dataAssesmen'));
    }

    public function inputEkstrakulikuler(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'kelas_id' => 'required',
            'nama_keg_1' => 'required',
            'nama_keg_2' => 'required',
            'nama_keg_3' => 'required',
            'nama_keg_4' => 'required',
            'nama_keg_5' => 'required',
            'nilai_keg_1' => 'required',
            'nilai_keg_2' => 'required',
            'nilai_keg_3' => 'required',
            'nilai_keg_4' => 'required',
            'nilai_keg_5' => 'required',
        ]);

        $ekstrakulikuler = new NilaiEkstrakulikuler();
        $ekstrakulikuler->siswa_id = $request->siswa_id;
        $ekstrakulikuler->kelas_id = $request->kelas_id;
        $ekstrakulikuler->nama_keg_1 = $request->nama_keg_1;
        $ekstrakulikuler->nama_keg_2 = $request->nama_keg_2;
        $ekstrakulikuler->nama_keg_3 = $request->nama_keg_3;
        $ekstrakulikuler->nama_keg_4 = $request->nama_keg_4;
        $ekstrakulikuler->nama_keg_5 = $request->nama_keg_5;
        $ekstrakulikuler->nilai_keg_1 = $request->nilai_keg_1;
        $ekstrakulikuler->nilai_keg_2 = $request->nilai_keg_2;
        $ekstrakulikuler->nilai_keg_3 = $request->nilai_keg_3;
        $ekstrakulikuler->nilai_keg_4 = $request->nilai_keg_4;
        $ekstrakulikuler->nilai_keg_5 = $request->nilai_keg_5;
        $ekstrakulikuler->save();

        return redirect('/ekstrakurikuler')->with('sukses', 'Data berhasil diinputkan!');
    }

    // public function editEkstrakulikuler($id)
    // {

    //     $dataEktrakurikuler = NilaiEkstrakulikuler::find($id);
    //     $dataSiswa = Siswa::all();
    //     $dataKelas = Kelas::all();
    //     $dataAssesmen = Asesmen::all();
    //     return view('edit_ekstrakurikuler', compact('dataEktrakurikuler', 'dataSiswa', 'dataKelas', 'dataAssesmen'));
    // }

    // public function updateEkstrakulikuler(Request $request, $id)

    // {
    //     $request->validate([
    //         'siswa_id' => 'required',
    //         'kelas_id' => 'required',
    //         'nama_keg_1' => 'required',
    //         'nama_keg_2' => 'required',
    //         'nama_keg_3' => 'required',
    //         'nama_keg_4' => 'required',
    //         'nama_keg_5' => 'required',
    //         'nilai_keg_1' => 'required',
    //         'nilai_keg_2' => 'required',
    //         'nilai_keg_3' => 'required',
    //         'nilai_keg_4' => 'required',
    //         'nilai_keg_5' => 'required',
    //     ]);

    //     $ekstrakulikuler = NilaiEkstrakulikuler::find($id);
    //     $ekstrakulikuler->siswa_id = $request->siswa_id;
    //     $ekstrakulikuler->kelas_id = $request->kelas_id;
    //     $ekstrakulikuler->nama_keg_1 = $request->nama_keg_1;
    //     $ekstrakulikuler->nama_keg_2 = $request->nama_keg_2;
    //     $ekstrakulikuler->nama_keg_3 = $request->nama_keg_3;
    //     $ekstrakulikuler->nama_keg_4 = $request->nama_keg_4;
    //     $ekstrakulikuler->nama_keg_5 = $request->nama_keg_5;
    //     $ekstrakulikuler->nilai_keg_1 = $request->nilai_keg_1;
    //     $ekstrakulikuler->nilai_keg_2 = $request->nilai_keg_2;
    //     $ekstrakulikuler->nilai_keg_3 = $request->nilai_keg_3;
    //     $ekstrakulikuler->nilai_keg_4 = $request->nilai_keg_4;
    //     $ekstrakulikuler->nilai_keg_5 = $request->nilai_keg_5;
    //     $ekstrakulikuler->save();

    //     return redirect('/ekstrakurikuler')->with('sukses', 'Data berhasil diupdate!');
    // }

    public function deleteEkstrakulikuler($id)
    {
        $ekstrakulikuler = NilaiEkstrakulikuler::find($id);
        $ekstrakulikuler->delete();
        return redirect('/ekstrakurikuler')->with('sukses', 'Data berhasil dihapus!');
    }
}
