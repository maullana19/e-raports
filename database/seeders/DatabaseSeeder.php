<?php

namespace Database\Seeders;

use App\Models\Asesmen;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\NilaiSiswa;
use App\Models\IdentitasSekolah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Roles::create([
            'id' => 1,
            'name_role' => 'admin',
            'description' => 'Role untuk Admin',
        ]);

        Roles::create([
            'id' => 2,
            'name_role' => 'user',
            'description' => 'Role untuk User Biasa',
        ]);

        User::create([
            'id' => 1,
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'nip' => '123456789',
            'no_hp' => '08123456789',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'role_id' => 1,
        ]);

        User::create([
            'id' => 2,
            'name' => 'User Biasa',
            'username' => 'user',
            'email' => 'user@example.com',
            'nip' => '987654321',
            'no_hp' => '08987654321',
            'password' => Hash::make('123456789'),
            'role' => 'user',
            'role_id' => 2,
        ]);

        Kelas::create([
            'id' => 1,
            'nama_kelas' => 'Kelas A - Tulip',
            'nama_wali_kelas' => 'Ibu faridah Spd',
            'nip_wali_kelas' => '123456789',
        ]);

        Asesmen::create([
            'id' => 1,
            'nama_assesmen' => 'SAB',
            'ket_assesmen' => 'Sangat Baik',
        ]);

        Asesmen::create([
            'id' => 2,
            'nama_assesmen' => 'BSH',
            'ket_assesmen' => 'Baik Sekali',
        ]);

        Asesmen::create([
            'id' => 3,
            'nama_assesmen' => 'SB',
            'ket_assesmen' => 'Sangat Baik',
        ]);

        Asesmen::create([
            'id' => 4,
            'nama_assesmen' => 'MB',
            'ket_assesmen' => 'Mulai Berkembang',
        ]);



        Siswa::create([
            'id' => 1,
            'nama_siswa' => 'Siswa test 1',
            'no_induk_siswa' => '123456789',
            'nisn' => '123456789',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '2000-01-01',
            'no_hp' => '08123456789',
            'kewarganegaraan' => 'WNI',
            'agama' => 'Islam',
            'nama_ayah' => 'ORTU SISWA TEST 1',
            'nama_ibu' => 'ORTU SISWA TEST 2',
            'pekerjaan_ayah' => 'PNS',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'anak_ke' => 1,
            'kelas_id' => 1,
            'alamat' => 'ALAMAT TEST',
            'foto_siswa' => 'default.jpg',
        ]);


        NilaiSiswa::create([
            'id' => 1,
            'siswa_id' => 1,
            'kelas_id' => 1,
            'semester' => 1,
            'tahun_pelajaran' => 2024,
            'nilai_a1' => 'INI NILAI ELEMEN 1 KOLOM 1',
            'nilai_a2' => 'INI NILAI ELEMEN 1 KOLOM 2',
            'nilai_a3' => 'INI NILAI ELEMEN 1 KOLOM 3',
            'nilai_a4' => 'INI NILAI ELEMEN 1 KOLOM 4',
            'ases_a1' => 'SB',
            'ases_a2' => 'BSH',
            'ases_a3' => 'SHB',
            'ases_a4' => 'MB',
            'nilai_b1' => 'INI NILAI ELEMEN 2 KOLOM 1',
            'nilai_b2' => 'INI NILAI ELEMEN 2 KOLOM 2',
            'nilai_b3' => 'INI NILAI ELEMEN 2 KOLOM 3',
            'nilai_b4' => 'INI NILAI ELEMEN 2 KOLOM 4',
            'ases_b1' => 'SB',
            'ases_b2' => 'SB',
            'ases_b3' => 'SB',
            'ases_b4' => 'SB',
            'nilai_c1' => 'INI NILAI ELEMEN 3 KOLOM 1',
            'nilai_c2' => 'INI NILAI ELEMEN 3 KOLOM 2',
            'nilai_c3' => 'INI NILAI ELEMEN 3 KOLOM 3',
            'nilai_c4' => 'INI NILAI ELEMEN 3 KOLOM 4',
            'nilai_c5' => 'INI NILAI ELEMEN 3 KOLOM 5',
            'nilai_c6' => 'INI NILAI ELEMEN 3 KOLOM 6',
            'nilai_c7' => 'INI NILAI ELEMEN 3 KOLOM 7',
            'ases_c1' => 'MB',
            'ases_c2' => 'BSH',
            'ases_c3' => 'SB',
            'ases_c4' => 'SB',
            'ases_c5' => 'SB',
            'ases_c6' => 'SB',
            'ases_c7' => 'SB',
            'tema_p5' => 'TEST TEMA P5',
            'nilai_p5' => 'TEST NILAI P5',
            'deskripsi_nilai_p5' => 'DESKRIPSI NILAI P5',
            'deskripsi_umum_p5' => 'DESKRIPSI UMUM P5',
            'deskripsi_nilai_a' => 'DESKRIPSI ELEMEN 1',
            'deskripsi_nilai_b' => 'DESKRIPSI ELEMEN 2',
            'deskripsi_nilai_c' => 'DESKRIPSI ELEMEN 3',
            'foto_kegiatan_a1' => 'https://via.placeholder.com/150',
            'foto_kegiatan_a2' => 'https://via.placeholder.com/150',
            'foto_kegiatan_a3' => 'https://via.placeholder.com/150',
            'foto_kegiatan_b1' => 'https://via.placeholder.com/150',
            'foto_kegiatan_b2' => 'https://via.placeholder.com/150',
            'foto_kegiatan_b3' => 'https://via.placeholder.com/150',
            'foto_kegiatan_c1' => 'https://via.placeholder.com/150',
            'foto_kegiatan_c2' => 'https://via.placeholder.com/150',
            'foto_kegiatan_c3' => 'https://via.placeholder.com/150',
            'foto_kegiatan_p1' => 'https://via.placeholder.com/150',
            'foto_kegiatan_p2' => 'https://via.placeholder.com/150',
            'foto_kegiatan_p3' => 'https://via.placeholder.com/150',
        ]);

        IdentitasSekolah::create([
            'id' => 1,
            'npsn' => 0000000000,
            'jenjang' => 'Pendidikan Anak Usia Dini (Paud)',
            'status_akreditasi' => 'Akreditasi B',
            'lokasi' => 'Jakarta Barat',
            'semester' => 'Ganjil',
            'tahun_ajaran' => '2024',
            'nama_kepala' => 'Affrina Shiam Munandar, S.pd',
            'nip' => '-',
            'nama_admin' => '-',
            'jabatan' => 'Administrasi Sekolah',
        ]);
    }
}
