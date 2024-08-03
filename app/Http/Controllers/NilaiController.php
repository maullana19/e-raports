<?php

namespace App\Http\Controllers;

use App\Models\Asesmen;
use App\Models\NilaiSiswa;
use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class NilaiController extends Controller
{
    public function index()
    {
        $dataNilai = NilaiSiswa::all();


        return view('nilai', compact('dataNilai',));
    }

    public function formDataNilai()
    {
        $dataSiswa = Siswa::all();
        $dataKelas = Kelas::all();
        $dataAssesmen = Asesmen::all();

        $siswaDenganNilai = NilaiSiswa::pluck('siswa_id')->toArray();

        // Filter data siswa untuk menghilangkan siswa yang sudah memiliki nilai
        $dataSiswa = $dataSiswa->reject(function ($siswa) use ($siswaDenganNilai) {
            return in_array($siswa->id, $siswaDenganNilai);
        });
        return view('input_nilai', compact('dataSiswa', 'dataKelas', 'dataAssesmen'));
    }

    public function inputNilai(Request $request)
    {
        $request->validate([
            'foto_kegiatan_a1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_a2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_a3' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_b1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_b2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_b3' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_c1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_c2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_c3' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_p1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_p2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_p3' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $validatedData = $request->validate([
            'siswa_id' => 'required',
            'kelas_id' => 'required',
            'semester' => 'required',
            'tahun_pelajaran' => 'required',
            'nilai_a1' => 'required',
            'nilai_a2' => 'required',
            'nilai_a3' => 'required',
            'nilai_a4' => 'required',
            'ases_a1' => 'required',
            'ases_a2' => 'required',
            'ases_a3' => 'required',
            'ases_a4' => 'required',
            'nilai_b1' => 'required',
            'nilai_b2' => 'required',
            'nilai_b3' => 'required',
            'nilai_b4' => 'required',
            'ases_b1' => 'required',
            'ases_b2' => 'required',
            'ases_b3' => 'required',
            'ases_b4' => 'required',
            'nilai_c1' => 'required',
            'nilai_c2' => 'required',
            'nilai_c3' => 'required',
            'nilai_c4' => 'required',
            'nilai_c5' => 'required',
            'nilai_c6' => 'required',
            'nilai_c7' => 'required',
            'ases_c1' => 'required',
            'ases_c2' => 'required',
            'ases_c3' => 'required',
            'ases_c4' => 'required',
            'ases_c5' => 'required',
            'ases_c6' => 'required',
            'ases_c7' => 'required',
            'tema_p5' => 'required',
            'nilai_p5' => 'required',
            'deskripsi_nilai_a' => 'required',
            'deskripsi_nilai_b' => 'required',
            'deskripsi_nilai_c' => 'required',
            'deskripsi_nilai_p5' => 'required',
            'deskripsi_umum_p5' => 'required',
        ]);

        $nilai = new NilaiSiswa();
        $nilai->siswa_id = $validatedData['siswa_id'];
        $nilai->kelas_id = $validatedData['kelas_id'];
        $nilai->semester = $validatedData['semester'];
        $nilai->tahun_pelajaran = $validatedData['tahun_pelajaran'];
        $nilai->nilai_a1 = $validatedData['nilai_a1'];
        $nilai->nilai_a2 = $validatedData['nilai_a2'];
        $nilai->nilai_a3 = $validatedData['nilai_a3'];
        $nilai->nilai_a4 = $validatedData['nilai_a4'];
        $nilai->ases_a1 = $validatedData['ases_a1'];
        $nilai->ases_a2 = $validatedData['ases_a2'];
        $nilai->ases_a3 = $validatedData['ases_a3'];
        $nilai->ases_a4 = $validatedData['ases_a4'];
        $nilai->nilai_b1 = $validatedData['nilai_b1'];
        $nilai->nilai_b2 = $validatedData['nilai_b2'];
        $nilai->nilai_b3 = $validatedData['nilai_b3'];
        $nilai->nilai_b4 = $validatedData['nilai_b4'];
        $nilai->ases_b1 = $validatedData['ases_b1'];
        $nilai->ases_b2 = $validatedData['ases_b2'];
        $nilai->ases_b3 = $validatedData['ases_b3'];
        $nilai->ases_b4 = $validatedData['ases_b4'];
        $nilai->nilai_c1 = $validatedData['nilai_c1'];
        $nilai->nilai_c2 = $validatedData['nilai_c2'];
        $nilai->nilai_c3 = $validatedData['nilai_c3'];
        $nilai->nilai_c4 = $validatedData['nilai_c4'];
        $nilai->nilai_c5 = $validatedData['nilai_c5'];
        $nilai->nilai_c6 = $validatedData['nilai_c6'];
        $nilai->nilai_c7 = $validatedData['nilai_c7'];
        $nilai->ases_c1 = $validatedData['ases_c1'];
        $nilai->ases_c2 = $validatedData['ases_c2'];
        $nilai->ases_c3 = $validatedData['ases_c3'];
        $nilai->ases_c4 = $validatedData['ases_c4'];
        $nilai->ases_c5 = $validatedData['ases_c5'];
        $nilai->ases_c6 = $validatedData['ases_c6'];
        $nilai->ases_c7 = $validatedData['ases_c7'];
        $nilai->nilai_p5 = $validatedData['nilai_p5'];
        $nilai->tema_p5 = $validatedData['tema_p5'];
        $nilai->deskripsi_nilai_a = $validatedData['deskripsi_nilai_a'];
        $nilai->deskripsi_nilai_b = $validatedData['deskripsi_nilai_b'];
        $nilai->deskripsi_nilai_c = $validatedData['deskripsi_nilai_c'];
        $nilai->deskripsi_nilai_p5 = $validatedData['deskripsi_nilai_p5'];
        $nilai->deskripsi_umum_p5 = $validatedData['deskripsi_umum_p5'];

        if ($request->hasFile('foto_kegiatan_a1')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_a1.' . $request->file('foto_kegiatan_a1')->getClientOriginalExtension();
            $request->file('foto_kegiatan_a1')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_a1 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_a2')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_a2.' . $request->file('foto_kegiatan_a2')->getClientOriginalExtension();
            $request->file('foto_kegiatan_a2')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_a2 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_a3')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_a3.' . $request->file('foto_kegiatan_a3')->getClientOriginalExtension();
            $request->file('foto_kegiatan_a3')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_a3 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_b1')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_b1.' . $request->file('foto_kegiatan_b1')->getClientOriginalExtension();
            $request->file('foto_kegiatan_b1')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_b1 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_b2')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_b2.' . $request->file('foto_kegiatan_b2')->getClientOriginalExtension();
            $request->file('foto_kegiatan_b2')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_b2 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_b3')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_b3.' . $request->file('foto_kegiatan_b3')->getClientOriginalExtension();
            $request->file('foto_kegiatan_b3')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_b3 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_c1')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_c1.' . $request->file('foto_kegiatan_c1')->getClientOriginalExtension();
            $request->file('foto_kegiatan_c1')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_c1 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_c2')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_c2.' . $request->file('foto_kegiatan_c2')->getClientOriginalExtension();
            $request->file('foto_kegiatan_c2')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_c2 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_c3')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_c3.' . $request->file('foto_kegiatan_c3')->getClientOriginalExtension();
            $request->file('foto_kegiatan_c3')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_c3 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_p1')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_p1.' . $request->file('foto_kegiatan_p1')->getClientOriginalExtension();
            $request->file('foto_kegiatan_p1')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_p1 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_p2')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_p2.' . $request->file('foto_kegiatan_p2')->getClientOriginalExtension();
            $request->file('foto_kegiatan_p2')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_p2 = $filename;
        }
        if ($request->hasFile('foto_kegiatan_p3')) {
            $filename = $nilai->id . '_' . Str::slug($nilai->siswa->nama_siswa) . '_p3.' . $request->file('foto_kegiatan_p3')->getClientOriginalExtension();
            $request->file('foto_kegiatan_p3')->storeAs('public/foto_kegiatan', $filename);
            $nilai->foto_kegiatan_p3 = $filename;
        }

        // Simpan Data
        $nilai->save();

        return redirect()->route('nilai')->with('status', 'Data berhasil disimpan!');
    }



    public function deleteNilai($id)
    {
        $data = NilaiSiswa::find($id);
        $data->delete();
        return redirect()->route('nilai')->with('status', 'Data berhasil dihapus!');
    }

    public function cariSiswa(Request $request)
    {
        $keyword = $request->input('keyword');

        $siswa = Siswa::where('nama_siswa', 'LIKE', "%$keyword%")
            ->orWhere('nim', 'LIKE', "%$keyword%")
            ->get();

        return view('nilai', compact('siswa'));
    }
}
