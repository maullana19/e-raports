@extends('layouts.app')

@section('title', 'Dashboard')


@section('contents')
    <div class="mb-4">
        <h3 class="text-muted fw-bold">Selamat datang di eRaport System Paud Athaya</h3>
    </div>

    <div class="row">
        <div class="col-xl-6 col-xxl-5 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Siswa</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-dark">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totalSiswa }}</h1>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Kelas</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-info">
                                            <i class="align-middle" data-feather="home"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totalKelas }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Periodik</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totalPeriodik }}</h1>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total Nilai</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="check-circle"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totalNilai }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card p-4" style="width: 27rem;">
                            <img src="{{ asset('adminkit/static/img/logo/logo_athaya.jpg') }}" class="card-img-top"
                                alt="logo">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-xxl-7">
            <div class="card flex-fill w-100">
                <div class="card-header d-flex align-items-center justify-content-between"
                    style="background-color: #4D869C;">
                    <h5 class="card-title mb-0 text-white">Identitas Sekolah</h5>
                    @if ($dataSekolah->count() > 0)
                        <form action="{{ route('editIdentitas', $dataSekolah->first()->id) }}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-sm text-white mb-0">
                                <i class="align-middle me-1" data-feather="edit-2"></i>
                            </button>
                        </form>
                    @endif
                </div>
                <div class="card-body py-3">
                    <table class="table table-striped">
                        @foreach ($dataSekolah as $data)
                            <tr>
                                <th scope="row">NPSN</th>
                                <td>: {{ $data->npsn }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenjang</th>
                                <td>: {{ $data->jenjang }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status Akreditasi</th>
                                <td>: {{ $data->status_akreditasi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Lokasi</th>
                                <td>: {{ $data->lokasi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Semester</th>
                                <td>: {{ $data->semester }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tahun Ajaran</th>
                                <td>: {{ $data->tahun_ajaran }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Kepala Sekolah</th>
                                <td>: {{ $data->nama_kepala }}</td>
                            </tr>
                            <tr>
                                <th scope="row">NIP</th>
                                <td>: {{ $data->nip }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Admin</th>
                                <td>: {{ $data->admin }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jabatan</th>
                                <td>: {{ $data->jabatan }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informasi Panduan</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="lead text-info">Untuk menjalankan aplikasi dibutuhkan beberapa Tools / Software :</p>
                            <ul>
                                <li>Google Chrome atau browser terbaru (Aplikasi berjalan dibrowser)</li>
                                <li>Laragon Web Server (sudah include paket)</li>
                                <li>PHP Versi 8.3 - Binary File</li>
                                <li>Database MySQL versi 8.0.30-winx64</li>
                            </ul>
                            <br>
                            <p class="lead text-info">Syarat:</p>
                            <ul>
                                <li>Min Windows 10/11</li>
                            </ul>
                            <br>
                            <p class="lead text-info">Petunjuk Penggunaan :</p>
                            <ul>
                                <li>Silahkan download FileZip kode sumber</li>
                                <li>Ekstrak di folder "www" yang ada di folder laragon yang sudah terinstal, biasanya berada
                                    di local C</li>
                                <li>Buka file sumbernya cari ' .env ' , buka dengan notepad</li>
                                <li>Cari bagian : DB_DATABASE='nama databasenya', silahkan ubah sesuai keinginan jangan lupa
                                    save</li>
                                <li>Jalankan laragon lalu klik 'start'</li>
                                <li>Tunggu hingga server berjalan</li>
                                <li>Pilih database klik lalu akan muncul Laragon.MySQL silahkan klik open</li>
                                <li>klik kanan lalu cari 'create new > database'</li>
                                <li>Lalu buatlah nama untuk menampung datanya misal : db_e_raport, gunakan underscore jika
                                    ingin menggunakan spasi</li>
                                <li>Jika sudah silahkan kembali, lalu klik terminal yang ada dilaragon</li>
                                <li>ketikan cd spasi nama aplikasi, lalu enter</li>
                                <li>Lalu ketikan <span class="text-danger">php artisan migrate:fresh --seed</span></li>
                                <li>Tunggu hingga selesai</li>
                                <li>Jika sudah, pilih bagian menu - www - Nama aplikasi</li>
                                <li>Lalu jalankan dan akan muncul dibrowser</li>
                                <li>Aplikasi siap digunakan</li>
                            </ul>
                            <br>
                            <p class="lead text-info">Info lainnya</p>
                            <small>Berhati-hatilah saat menginstall aplikasi atau konfigurasi agar tidak terjadi hal-hal yg
                                tidak diinginkan, pelajari dengan seksama panduannya, jika butuh info lebih lanjut hubungi
                                admin.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
