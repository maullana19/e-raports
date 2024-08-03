<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data_kelas = Kelas::all();
        return view('kelas', compact('data_kelas'));
    }

    public function inputKelas(Request $request)
    {
        $kelas = new Kelas();
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->nama_wali_kelas = $request->nama_wali_kelas;
        $kelas->nip_wali_kelas = $request->nip_wali_kelas;

        $kelas->save();

        return redirect()->route('dataKelas')->with('success', 'Data kelas berhasil disimpan');
    }

    public function formEditKelas($id)
    {
        $kelas = Kelas::find($id);
        return view('edit_Kelas', compact('kelas'));
    }

    public function editDataKelas(Request $request, $id)
    {
        $kelas = Kelas::find($id);

        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->nama_wali_kelas = $request->nama_wali_kelas;
        $kelas->nip_wali_kelas = $request->nip_wali_kelas;

        $kelas->save();

        return redirect()->route('dataKelas')->with('success', 'Data kelas berhasil disimpan');
    }

    public function deleteKelas($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect()->route('dataKelas')->with('success', 'Data kelas berhasil di hapus');
    }
}
