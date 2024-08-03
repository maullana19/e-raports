<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Cover</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .cover {
            background-image: url('{{ asset('adminkit/static/img/logo/bingkai.jpg') }}');
            background-size: cover;
            background-position: center;
            position: relative;
            height: 100%;
        }

        .content {
            text-align: center;
            color: black;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        table {
            margin: 0 auto;

        }



        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="cover">
        <div class="content">
            <div>
                <h2>LAPORAN PENCAPAIAN PERKEMBANGAN ANAK (LPPA)</h2>
            </div>
            <br>
            <br>
            <div>
                <img src="{{ asset('adminkit/static/img/logo/logo_athaya.jpg') }}" alt="Logo PAUD Athaya"
                    style="width: 190px; height: 140px;">
            </div>
            <br>
            <div>
                <h3>Nama Lengkap Siswa</h3>
                <h2>{{ $siswa->nama_siswa }}</h2>
            </div>
            <div style="display: flex; flex-direction: row-reverse;">
                <div style="margin-left: 1rem;">
                    <div>
                        <table>
                            <tr>
                                <td>NISN</td>
                                <td>:</td>
                                <td> {{ $siswa->nisn }}</td>
                            </tr>
                            <tr>
                                <td>No Induk</td>
                                <td>:</td>
                                <td> {{ $siswa->no_induk_siswa }}</td>
                            </tr>
                            <tr>
                                <td>KELAS</td>
                                <td>:</td>
                                <td> {{ $siswa->kelas->nama_kelas }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div>
                <h2>Pendidikan Anak Usia Dini (PAUD ATHAYA)</h2>
                <h3>Tahun ajaran</h3>
                <h4>{{ \Carbon\Carbon::now()->subYear()->format('Y') }}/{{ \Carbon\Carbon::now()->format('Y') }}</h4>
            </div>
        </div>
    </div>
    <div class="page-break"></div>
    <div style="display: flex; justify-content: center;">
        <img src="{{ asset('adminkit/static/img/icons/heading-penggunaan.png') }}" width="670" alt="heading"
            style="align-self: center;">
    </div>
    <br>
    <div style="display: flex; flex-direction: row-reverse;">
        <table style="line-height: 1.5rem;">
            <tr>
                <td style="width: 30px; text-align: right;">1.</td>
                <td>Raport PAUD yang selanjutnya disebut Buku Laporan Pencapaian Perkembangan Anak (LPPA)
                </td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">&nbsp;</td>
                <td>Kurikulum Merdeka Belajar PAUD dipergunakan selama anak didik mengikuti seluruh program
                    pembelajaran di PAUD / TK/KB.</td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">2.</td>
                <td>Apabila anak didik pindah sekolah , Buku LPPA dibawa oleh anak didik yang bersangkutan
                </td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">&nbsp;</td>
                <td>untuk dipergunakan disekolah baru sebagai bukti pencapaian kompetensi dengan meninggalkan
                    Arsip disekolah asal.</td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">3.</td>
                <td>Apabila buku LPPA hilang , dapat diganti dengan LPPA pengganti dan diisi dengan nilai-nilai
                </td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">&nbsp;</td>
                <td>yang dikutip dari buku induk sekolah asal anak didik dan disahkan oleh kepala sekolah
                    bersangkutan.</td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">4.</td>
                <td>Identitas Satuan PAUD dan identitas anak didik diisi sesuai dengan data Riil lembaga dan anak
                </td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">&nbsp;</td>
                <td>didik bersangkutan.</td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">5.</td>
                <td>Penilaian perkembangan anak didik dilakukan secara kualitatif selama anak didik mengikuti
                </td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">&nbsp;</td>
                <td>pendidikan dikelompok bermain berdasarkan catatan Anekdot, skala capaian harian , dan
                    catatan hasil karya.</td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">6.</td>
                <td>Buku LPPA harus dilengkapi pas foto terbaru ukuran 3 x 4 cm, dan pengisiannya dilakukan oleh
                </td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">&nbsp;</td>
                <td>wali kelas berkoordinasi dengan guru pendidik, diisi dengan cara memberikan Keterangan Nilai
                    Kualitatif, dan narasi/uraian/deskripsi pada setiap aspek perkembangan yang berisi catatan
                    penting berkaitan dengan anak didik.</td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">7.</td>
                <td>Sumber penilaian terhadap anak didik adalah pengamatan sehari-hari dalam kelas yang
                </td>
            </tr>
            <tr>
                <td style="width: 30px; text-align: right;">&nbsp;</td>
                <td>direkam dalam catatan hasil belajar harian siswa (Ceklis, Foto Berseri, Hasil Karya, dan Catatan
                    Anekdok).</td>
            </tr>
        </table>
        <div style="display: flex; justify-content: center; margin: 1rem;">
            <img src="{{ asset('adminkit/static/img/icons/hasil-capaian.png') }}" width="600" alt="heading"
                style="align-self: center;">
        </div>
    </div>
    <div class="page-break"></div>
    <div style="display: flex; justify-content: center;">
        <div style="margin: auto; max-width: 50%; display: block;">
            <img src="{{ asset('adminkit/static/img/icons/heading-datadiri.png') }}" width="300" alt="heading">
        </div>
    </div>
    <br>
    <br>
    <div style="background-color: #4D869C; color: #ffffff; border-radius: 6px">
        <h3 style="padding-left: 12px;">BIODATA SISWA</h3>
    </div>
    <div style="display: flex; justify-content: start; align-items: flex-start">
        <div style="width: 100%;">
            <table style="margin-left: 12px;">
                <tr>
                    <td style="text-align: left; width: 30px;">1.</td>
                    <td>Nama Peserta Didik</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->nama_siswa }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">2.</td>
                    <td>Tempat/Tgl Lahir</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->tempat_lahir }},
                        {{ date('d-m-Y', strtotime($siswa->tanggal_lahir)) }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">3.</td>
                    <td>Jenis Kelamin</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">4.</td>
                    <td>Anak ke</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->anak_ke }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">5.</td>
                    <td>Agama</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->agama }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">6.</td>
                    <td>Kewarganegaraan</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->kewarganegaraan }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">7.</td>
                    <td>Alamat Siswa</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->alamat }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">8.</td>
                    <td>NISN/No Induk</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->nisn }} / {{ $siswa->no_induk_siswa }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <br>
    <div style="background-color: #DD761C; color: #ffffff; border-radius: 6px">
        <h3 style="padding-left: 12px;">IDENTITAS ORANG TUA</h3>
    </div>
    <div style="display: flex; justify-content: start; align-items: flex-start">
        <div style="width: 100%; display: flex; justify-content: flex-start;">
            <table style="margin-left: 12px;">
                <tr>
                    <td style="text-align: left; width: 30px;">1.</td>
                    <td>Nama Ayah</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->nama_ayah }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">2.</td>
                    <td>Pekerjaan Ayah</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->pekerjaan_ayah }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">3.</td>
                    <td>Nama Ibu</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->nama_ibu }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">4.</td>
                    <td>Pekerjaan Ibu</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->pekerjaan_ibu }}</td>
                </tr>
                <tr>
                    <td style="text-align: left; width: 30px;">5.</td>
                    <td>No Telepon</td>
                    <td style="padding-left: 10px;">:</td>
                    <td style="padding-left: 10px;">{{ $siswa->no_hp }}</td>
                </tr>
            </table>
        </div>

        <br>
        <br>
        <hr style="color: #F1F1F1;">
        <br>
        <br>
        <div style="width: 50%; float: left;">
            <img src="{{ asset('storage/foto_siswa/' . $siswa->foto_siswa) }}" alt="foto siswa"
                style="width: 50%; display: block; border-radius: 6px; margin-left: auto; margin-right: auto;">
        </div>
        <div style="width: 100%; text-align: right;">
            <p> Jakarta,
                {{ \Carbon\Carbon::parse($tanggal_cetak_raport)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}
                <br>
                <br>
                Kepala Paud Athaya
                <br>
                <br>
                <br>
                <br>
                <br>
                <span style="font-weight: bold;">Affrina Shiam Munandar, S.Pd</span>
                <br>
                <br>
                <span style="font-weight: bold; padding-right: 150px;">NIP/NIY. </span>
            </p>
            <br>
            <img src="{{ asset('adminkit/static/img/logo/logo_kumer.png') }}" alt="Logo PAUD Athaya"
                style="width: 70px; height: 30px;">
        </div>
    </div>
</body>

</html>
