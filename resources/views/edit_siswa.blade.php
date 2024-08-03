@extends('layouts.app')

@section('title', 'Edit Data Siswa')


@section('contents')
    <div class="mb-3 d-flex justify-content-between">
        <h2>Edit Data Siswa</h2>
        <a href="{{ route('siswa') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <div class="bg-white p-4 shadow rounded">
        <form class="row g-3 needs-validation" novalidate action="{{ route('updateDataSiswa', $siswa->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-4">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa"
                    value="{{ $siswa->nama_siswa }}" required>
            </div>
            <div class="col-md-4">
                <label for="no_induk_siswa" class="form-label">Nomor Induk Siswa</label>
                <input type="text" class="form-control" id="no_induk_siswa" name="no_induk_siswa"
                    value="{{ $siswa->no_induk_siswa }}" required>

            </div>
            <div class="col-md-4">
                <label for="nisn" class="form-label">NISN <span class="text-sm">( masukan "-" Jika Tidak
                        ada)</span></label>
                <input type="text" class="form-control" id="nisn" name="nisn" value="{{ $siswa->nisn }}"
                    required>

            </div>
            <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option selected value="{{ $siswa->jenis_kelamin }}">{{ $siswa->jenis_kelamin }}</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>

            </div>
            <div class="col-md-6">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                    value="{{ $siswa->tempat_lahir }}" required>

            </div>
            <div class="col-md-6">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                    value="{{ $siswa->tanggal_lahir }}" required>

            </div>
            <div class="col-md-6">
                <label for="no_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $siswa->no_hp }}"
                    required>

            </div>
            <div class="col-md-6">
                <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan"
                    value="{{ $siswa->kewarganegaraan }}" required>

            </div>
            <div class="col-md-6">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" value="{{ $siswa->agama }}"
                    required>

            </div>
            <div class="col-md-6">
                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{ $siswa->nama_ayah }}"
                    required>

            </div>
            <div class="col-md-6">
                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ $siswa->nama_ibu }}"
                    required>

            </div>
            <div class="col-md-6">
                <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah"
                    value="{{ $siswa->pekerjaan_ayah }}" required>

            </div>
            <div class="col-md-6">
                <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu"
                    value="{{ $siswa->pekerjaan_ibu }}" required>

            </div>
            <div class="col-md-4">
                <label for="anak_ke" class="form-label">Anak Ke-</label>
                <input type="number" class="form-control" id="anak_ke" name="anak_ke" value="{{ $siswa->anak_ke }}"
                    required>

            </div>
            <div class="col-md-4">
                <label for="kelas_id" class="form-label">Nama Kelas</label>
                <select class="form-select" id="kelas_id" name="kelas_id" required>
                    <option value="" selected>Pilih Kelas</option>
                    @foreach ($kelas as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $siswa->alamat }}"
                    required>

            </div>
            <div class="col-md-4">
                <div class="form-group my-3">
                    <label for="current_photo">Foto Siswa</label><br>
                    @if ($siswa->foto_siswa)
                        <img src="{{ asset('storage/foto_siswa/' . $siswa->foto_siswa) }}" alt="Foto Siswa"
                            style="max-width: 200px;">
                    @else
                        <small class="text-muted">Foto Siswa Belum Diupload.</small>
                    @endif
                </div>

                <div class="form-group my-3">
                    <label for="foto_siswa">Upload Foto Siswa Baru</label>
                    <input type="file" class="form-control" name="foto_siswa" id="foto_siswa">
                </div>
            </div>
            <div class="col-12 text-end">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection
