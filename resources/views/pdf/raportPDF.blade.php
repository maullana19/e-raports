<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Raport Nilai</title>

    <style>
        th,
        td {
            padding: 6px;
        }

        .page-break {
            page-break-after: always;
        }

        .foto-kegiatan-a {
            width: 100%;
            height: 200px;
            position: relative;
        }
    </style>

</head>

<body>
    <div style="text-align: center">
        <h2>
            LAPORAN PENCAPAIAN PERKEMBANGAN ANAK <br>
            LPPA
        </h2>
    </div>
    <hr>
    <div>
        <table>
            <tr>
                <td style="font-weight: bold">Nama Sekolah</td>
                <td class="separator">:</td>
                <td>PAUD ATHAYA</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Tahun Ajaran</td>
                <td>:</td>
                <td>{{ $nilai->tahun_pelajaran }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Semester</td>
                <td>:</td>
                <td>{{ $nilai->semester }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Nama Siswa</td>
                <td>:</td>
                <td>{{ $nilai->siswa->nama_siswa }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Kelompok/kelas</td>
                <td>:</td>
                <td>{{ $nilai->kelas->nama_kelas }}</td>
            </tr>
        </table>
    </div>
    <hr>
    <br>
    {{-- ELEMEN Nilai A --}}
    <div style="background-color: #4D869C; color: white; border-radius: 6px;">
        <h3 style="padding-top: 4px; padding-bottom: 4px; padding-left: 12px;">I. ELEMEN NILAI AGAMA DAN BUDI PEKERTI
        </h3>
    </div>
    <div>
        <table border="1" width="100%" style="border-collapse: collapse; padding: 1rem;">
            <thead align="center" style="background-color: #4D869C; color: white;">
                <tr>
                    <th>NO</th>
                    <th>CAPAIAN PEMBELAJARAN</th>
                    <th>HASIL ASESMEN</th>
                </tr>
            </thead>
            <tbody>
                @foreach (range(1, 4) as $i)
                    <tr>
                        <td align="center">{{ $i }}</td>
                        <td>{{ $nilai['nilai_a' . $i] }}</td>
                        <td align="center">{{ $nilai['ases_a' . $i] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div style="background-color: #4D869C; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Foto Kegiatan
            Agama dan Budi
            Pekerti</h4>
    </div>
    <div class="foto-kegiatan-a">
        <div style="top: 50px; display: flex; position: absolute; width: 100%;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_a1) }}" alt="Foto Kegiatan"
                style=" width: 230px; height: 200px; border-radius: 6px;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_a2) }}" alt="Foto Kegiatan"
                style=" width: 230px; height: 200px; border-radius: 6px;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_a3) }}" alt="Foto Kegiatan"
                style="width: 230px; height: 200px; border-radius: 6px;">
        </div>
    </div>

    <div class="page-break"></div>
    <div style="background-color: #4D869C; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Deskripsi Capaian Pembelajaran Nilai Agama dan Budi Pekerti</h4>
    </div>
    <br>
    <div style="border: 1px solid #4D869C; padding: 1rem; border-radius: 6px;  height: 85%;">
        <p style="text-align: justify;">
            {{ $nilai->deskripsi_nilai_a }}
        </p>
    </div>
    <div class="page-break"></div>
    {{-- ELEMEN NILAI B --}}
    <div style="background-color: #DD761C; ; color: white; width: 100%; border-radius: 6px">
        <h3 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            II. ELEMEN JATI DIRI</h3>
    </div>
    <br>
    <table border="1" width="100%" style="border-collapse: collapse; padding: 1rem;">
        <thead align="center" style="background-color: #DD761C; color: white;">
            <tr>
                <th>NO</th>
                <th>CAPAIAN PEMBELAJARAN</th>
                <th>HASIL ASESMEN</th>
            </tr>
        </thead>
        <tbody>
            @foreach (range(1, 4) as $i)
                <tr>
                    <td align="center">{{ $i }}</td>
                    <td>{{ $nilai->{'nilai_b' . $i} }}</td>
                    <td align="center">{{ $nilai->{'ases_b' . $i} }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <div style="background-color: #DD761C; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Foto Kegiatan Jati Diri.</h4>
    </div>
    <div class="foto-kegiatan-a">
        <div style="top: 50px; display: flex; position: absolute; width: 100%;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_b1) }}" alt="Foto Kegiatan"
                style=" width: 230px; height: 200px; border-radius: 6px;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_b2) }}" alt="Foto Kegiatan"
                style=" width: 230px; height: 200px; border-radius: 6px;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_b3) }}" alt="Foto Kegiatan"
                style="width: 230px; height: 200px; border-radius: 6px;">
        </div>
    </div>
    <div class="page-break"></div>
    <div style="background-color: #DD761C; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Deskripsi Capaian Pembelajaran Jati Diri
        </h4>
    </div>
    <br>
    <div style="border: 1px solid #DD761C; padding: 1rem; border-radius: 6px;  height: 85%;">
        <p style="text-align: justify;"> {{ $nilai->deskripsi_nilai_b }}</p>
    </div>
    <div class="page-break"></div>
    {{-- ELEMEN Nilai C --}}
    <div style="background-color: #638889; ; color: white; width: 100%; border-radius: 6px">
        <h3 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            III. DASAR-DASAR LITERASI, MATEMATIKA, SAINS TEKNOLOGI REKAYASA DAN SENI
        </h3>
    </div>
    <br>
    <table border="1" width="100%" style="border-collapse: collapse; padding: 1rem;">
        <thead align="center" style="background-color: #638889; color: white;">
            <tr>
                <th>NO</th>
                <th>CAPAIAN PEMBELAJARAN</th>
                <th>HASIL ASESMEN</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 7; $i++)
                <tr>
                    <td align="center">{{ $i }}</td>
                    <td>{{ $nilai->{"nilai_c$i"} }}</td>
                    <td align="center">{{ $nilai->{"ases_c$i"} }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
    <br>
    <div style="background-color: #638889; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Foto Kegiatan
        </h4>
    </div>
    <div class="foto-kegiatan-a">
        <div style="top: 50px; display: flex; position: absolute; width: 100%;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_c1) }}" alt="Foto Kegiatan"
                style=" width: 230px; height: 200px; border-radius: 6px;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_c2) }}" alt="Foto Kegiatan"
                style=" width: 230px; height: 200px; border-radius: 6px;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_c3) }}" alt="Foto Kegiatan"
                style="width: 230px; height: 200px; border-radius: 6px;">
        </div>
    </div>
    </div>
    <div class="page-break"></div>
    <div style="background-color: #638889; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Deskripsi Dasar -Dasar Literasi Matematika Sains Teknologi Rekayasa Dan Seni
        </h4>
    </div>
    <br>
    <div style="border: 1px solid #638889; padding: 1rem; border-radius: 6px;  height: 85%;">
        <p style="text-align: justify;">{{ $nilai->deskripsi_nilai_b }}
        </p>
    </div>
    <div class="page-break"></div>
    {{-- ELEMEN Nilai IV p5 --}}
    <div style="background-color: #4793AF; ; color: white; width: 100%; border-radius: 6px">
        <h3 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            IV. PROJEK PENGUATAN PROFIL PELAJAR PANCASILA (P5)
        </h3>
    </div>
    <div>
        <table>
            <tr>
                <td>Tema P5</td>
                <td>:</td>
                <td>{{ $nilai->tema_p5 }}</td>

            </tr>
            <tr>
                <td>Topik P5</td>
                <td>:</td>
                <td>{{ $nilai->nilai_p5 }}</td>

            </tr>
        </table>
    </div>
    <br>
    <div style="background-color: #4793AF ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Deskripsi Umum Projek p5
        </h4>
    </div>
    <div style="border: 1px solid #4793AF;; padding: 1rem; border-radius: 6px;  height: 40%;">
        <p style="text-align: justify;">{{ $nilai->deskripsi_umum_p5 }}
        </p>
    </div>
    <div style="background-color: #4793AF; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Foto Kegiatan P5
        </h4>
    </div>
    <div class="foto-kegiatan-a">
        <div style="top: 50px; display: flex; position: absolute; width: 100%;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_p1) }}" alt="Foto Kegiatan"
                style=" width: 230px; height: 200px; border-radius: 6px;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_p2) }}" alt="Foto Kegiatan"
                style=" width: 230px; height: 200px; border-radius: 6px;">
            <img src="{{ asset('storage/foto_kegiatan/' . $nilai->foto_kegiatan_p3) }}" alt="Foto Kegiatan"
                style="width: 230px; height: 200px; border-radius: 6px;">
        </div>
    </div>
    <div class="page-break"></div>
    <div style="background-color: #4793AF ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Deskripsi Nilai P5
        </h4>
    </div>
    <br>
    <div style="border: 1px solid #4793AF;; padding: 1rem; border-radius: 6px;  height: 85%;">
        <p style="text-align: justify;">{{ $nilai->deskripsi_nilai_p5 }}
        </p>
    </div>
    <div class="page-break"></div>
    <div style="background-color: #A34343; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            E. Refleksi Orang Tua
        </h4>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>
                        Keterangan Hasil Capaian
                    </th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Sangat Berkembang</td>
                    <td>:</td>
                    <td>SAB</td>
                </tr>
                <tr>
                    <td>Berkembang Sesuai Harapan</td>
                    <td>:</td>
                    <td>BSH</td>
                </tr>
                <tr>
                    <td>Sedang Berkebembang</td>
                    <td>:</td>
                    <td>SB</td>
                </tr>
                <tr>
                    <td>Mulai Berkembang</td>
                    <td>:</td>
                    <td>MB</td>
                </tr>
            </tbody>

        </table>
    </div>
    <div style="background-color: #A34343; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            PRESENSI DAN DDTK
        </h4>
    </div>
    <div>
        <table>
            <tr>
                <td>Sakit</td>
                <td>:</td>
                <td>{{ $periodik->sakit ?? 'Tidak ada data' }}</td>
            </tr>
            <tr>
                <td>Izin</td>
                <td>:</td>
                <td>{{ $periodik->izin ?? 'Tidak ada data' }}</td>
            </tr>
            <tr>
                <td>Tanpa Keterangan</td>
                <td>:</td>
                <td>{{ $periodik->tanpa_keterangan ?? 'Tidak ada data' }}</td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td>:</td>
                <td>{{ $periodik->berat_badan ?? 'Tidak ada data' }}</td>
            </tr>
            <tr>
                <td>Tinggi Badan</td>
                <td>:</td>
                <td>{{ $periodik->tinggi_badan ?? 'Tidak ada data' }}</td>
            </tr>
            <tr>
                <td>BB / U</td>
                <td>:</td>
                <td>{{ $periodik->keterangan_berat ?? 'Tidak ada data' }}</td>
            </tr>
            <tr>
                <td>TB / U</td>
                <td>:</td>
                <td>{{ $periodik->keterangan_tinggi ?? 'Tidak ada data' }}</td>
            </tr>
            <tr>
                <td>Lingkar Kepala</td>
                <td>:</td>
                <td>{{ $periodik->lingkar_kepala ?? 'Tidak ada data' }}</td>
            </tr>
        </table>
    </div>
    <div style="background-color: #638889; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            Ekstrakurikuler
        </h4>
    </div>
    <div>
        <table width="100%" align="center" border="1" style="border-collapse: collapse;">
            <thead style="background-color: #638889; color: white; ">
                <tr align="center">
                    <th>No</th>
                    <th>Ekstrakurikuler</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody align="center">

                @foreach (range(1, 5) as $i)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $ekstrakurikuler->{'nama_keg_' . $i} ?? 'Tidak ada data' }}</td>
                        <td>{{ $ekstrakurikuler->{'nilai_keg_' . $i} ?? 'Tidak ada data' }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <br>
    <table width="100%" align="center" border="0" style="border-collapse: collapse;">
        <tr>
            <td>
                Mengetahui, <br>
                Kepala Sekolah <br>
                Paud Athaya
                <br><br><br>
                <br>
                <span style="font-weight: bold">Affrina Shiam Munandar, S.Pd </span><br>
                NIP/NIY.
            </td>
            <td align="right">
                Jakarta,
                {{ \Carbon\Carbon::parse($tanggal_cetak_raport)->locale('id_ID')->isoFormat(' D MMMM YYYY') }}
                <br>
                Mengetahui, <br>
                Guru/Wali Kelas <br><br><br><br>
                <span style="font-weight: bold;">{{ $nilai->kelas->nama_wali_kelas }} </span><br>
                NIP/NIY.
            </td>
        </tr>
    </table>
    <div class="page-break"></div>
    <div style="background-color: #638889; ; color: white; width: 100%; border-radius: 6px">
        <h4 style="text-transform: uppercase; padding-top: 4px; padding-bottom: 4px; padding-left: 12px; ">
            KOMENTAR ORANG TUA
        </h4>
    </div>
    <br>
    <div style="border: 1px solid #638889; padding: 1rem; border-radius: 6px;  height: 85%;">
        <p style="text-align: justify;"></p>
    </div>
</body>

</html>
