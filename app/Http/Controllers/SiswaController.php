<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::paginate(10);
        return view('siswa', compact('siswa'));
    }

    public function formDataSiswa()
    {
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('input_siswa', compact('siswa', 'kelas'));
    }

    public function inputDataSiswa(Request $request)
    {
        $request->validate([
            'foto_siswa' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $siswa = new Siswa();
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->no_induk_siswa = $request->no_induk_siswa;
        $siswa->nisn = $request->nisn;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->no_hp = $request->no_hp;
        $siswa->kewarganegaraan = $request->kewarganegaraan;
        $siswa->agama = $request->agama;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
        $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
        $siswa->anak_ke = $request->anak_ke;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->alamat = $request->alamat;

        // Simpan foto baru jika ada
        if ($request->hasFile('foto_siswa')) {
            $filename = $siswa->id . '_' . Str::slug($siswa->nama_siswa) . '.' . $request->file('foto_siswa')->getClientOriginalExtension();
            $request->file('foto_siswa')->storeAs('public/foto_siswa', $filename);
            $siswa->foto_siswa = $filename;
        }

        $siswa->save();

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil disimpan !!');
    }


    public function editDataSiswa($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('edit_siswa', compact('siswa', 'kelas'));
    }

    public function updateDataSiswa(Request $request, $id)
    {
        $request->validate([
            'foto_siswa' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $siswa = Siswa::find($id);
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->no_induk_siswa = $request->no_induk_siswa;
        $siswa->nisn = $request->nisn;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->no_hp = $request->no_hp;
        $siswa->kewarganegaraan = $request->kewarganegaraan;
        $siswa->agama = $request->agama;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
        $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
        $siswa->anak_ke = $request->anak_ke;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->alamat = $request->alamat;

        if ($request->hasFile('foto_siswa')) {
            // Hapus foto lama jika ada
            if ($siswa->foto_siswa) {
                Storage::delete('public/foto_siswa/' . $siswa->foto_siswa);
            }

            // Simpan foto baru
            $filename = $siswa->id . '_' . Str::slug($siswa->name) . '.' . $request->file('foto_siswa')->getClientOriginalExtension();
            $request->file('foto_siswa')->storeAs('public/foto_siswa', $filename);
            $siswa->foto_siswa = $filename;
        }

        $siswa->save();

        return redirect()->route('siswa')->with('updateSuccess', 'Data siswa berhasil diperbarui !!');
    }

    public function deleteDataSiswa($id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return redirect()->route('siswa')->with('error', 'Data siswa tidak ditemukan');
        }

        $siswa->delete();

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil dihapus');
    }

    public function searchSiswa(Request $request)
    {
        $keyword = $request->input('keyword');

        $siswa = Siswa::where('nama_siswa', 'LIKE', "%$keyword%")
            ->orWhere('no_induk_siswa', 'LIKE', "%$keyword%")
            ->get();

        return view('result', compact('siswa'));
    }
}
