@extends('layouts.app')

@section('title', 'Input Data Siswa')


@section('contents')
    <div class="mb-3 d-flex justify-content-between">
        <h3 class="text-muted">Silahkan Input Data Siswa</h3>
        <a href="{{ route('siswa') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <div class="bg-white p-4 shadow rounded">
        @if (session('errorImage'))
            <div class="text-center">
                <p class="text-danger">{{ session('errorImage') }}</p>
            </div>
        @endif
        <form class="row g-3 needs-validation" novalidate action="{{ route('inputDataSiswa') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-4">
                <label for="nama_siswa" class="form-label fw-bold">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
            </div>
            <div class="col-md-4">
                <label for="no_induk_siswa" class="form-label fw-bold">Nomor Induk Siswa</label>
                <input type="text" class="form-control" id="no_induk_siswa" name="no_induk_siswa" required>
            </div>
            <div class="col-md-4">
                <label for="nisn" class="form-label fw-bold">NISN <span class="text-sm">( masukan "-" Jika Tidak
                        ada)</span></label>
                <input type="text" class="form-control" id="nisn" name="nisn" required>
            </div>
            <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label fw-bold">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option selected disabled value="">Pilih...</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="tempat_lahir" class="form-label fw-bold">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>
            <div class="col-md-6">
                <label for="tanggal_lahir" class="form-label fw-bold">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="col-md-6">
                <label for="no_hp" class="form-label fw-bold">Nomor HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <div class="col-md-6">
                <label for="kewarganegaraan" class="form-label fw-bold">Kewarganegaraan</label>
                <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
            </div>
            <div class="col-md-6">
                <label for="agama" class="form-label fw-bold">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" required>
            </div>
            <div class="col-md-6">
                <label for="nama_ayah" class="form-label fw-bold">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
            </div>
            <div class="col-md-6">
                <label for="nama_ibu" class="form-label fw-bold">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
            </div>
            <div class="col-md-6">
                <label for="pekerjaan_ayah" class="form-label fw-bold">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
            </div>
            <div class="col-md-6">
                <label for="pekerjaan_ibu" class="form-label fw-bold">Pekerjaan Ibu</label>
                <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
            </div>
            <div class="col-md-4">
                <label for="anak_ke" class="form-label fw-bold">Anak Ke-</label>
                <input type="number" class="form-control" id="anak_ke" name="anak_ke" min="1" required>
            </div>
            <div class="col-md-4">
                <label for="kelas_id" class="form-label fw-bold">Nama Kelas</label>
                <select class="form-select" id="kelas_id" name="kelas_id" required>
                    <option value="" selected>Pilih Kelas</option>
                    @foreach ($kelas as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label for="alamat" class="form-label fw-bold">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="col-md-4">
                <label for="foto_siswa" class="form-label fw-bold">Foto Siswa</label>
                <input type="file" class="form-control" id="foto_siswa" name="foto_siswa">
            </div>
            <div>
                <small class="text-danger">*File harus bertipe .jpg, .jpeg, .png | max 2 MB</small>
            </div>
            <br>
            <div class="col-12 text-end">
                <button class="btn btn-info" type="submit">Simpan</button>
            </div>
        </form>
    </div>

@endsection
