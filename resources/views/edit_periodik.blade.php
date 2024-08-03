@extends('layouts.app')

@section('title', 'Edit Periodik')


@section('contents')
    <div class="mb-3">
        <h1>Edit Data Periodik</h1>
    </div>

    <div>
        <form class="row g-3 needs-validation" action="{{ route('prosesEditPeriodik', $dataPeriodik->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-3">
                <label for="siswa_id" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="siswa_id" name="siswa_id"
                    value="{{ $dataPeriodik->siswa->nama_siswa }}" disabled>
                <input type="hidden" class="form-control" id="siswa_id" name="siswa_id"
                    value="{{ $dataPeriodik->siswa_id }}">
            </div>
            <div class="col-md-3">
                <label for="kelas_id" class="form-label">Nama Kelas</label>
                <select class="form-select" name="kelas_id" aria-label="Default select example">
                    <option value="" selected>{{ __('Pilih Kelas') }}</option>
                    @foreach ($kelas as $dataKelas)
                        <option value="{{ $dataKelas->id }}"
                            {{ $dataPeriodik->kelas_id == $dataKelas->id ? 'selected' : '' }}>
                            {{ $dataKelas->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" name="semester" id="semester"
                    value="{{ $dataPeriodik->semester }}" required>
            </div>
            <div class="col-md-3">
                <label for="tahun_pelajaran" class="form-label">Tahun Ajaran</label>
                <input type="text" class="form-control" name="tahun_pelajaran" id="tahun_pelajaran"
                    value="{{ $dataPeriodik->tahun_pelajaran }}" required>
            </div>
            <div class="col-md-2">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" class="form-control" name="umur" id="umur" value="{{ $dataPeriodik->umur }}"
                    required>
            </div>
            <div class="col-md-2">
                <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan"
                    value="{{ $dataPeriodik->tinggi_badan }}" required>
            </div>
            <div class="col-md-2">
                <label for="berat_badan" class="form-label">Berat Badan</label>
                <input type="number" class="form-control" name="berat_badan" id="berat_badan"
                    value="{{ $dataPeriodik->berat_badan }}" required>
            </div>
            <div class="col-md-2">
                <label for="lingkar_kepala" class="form-label">Lingkar Kepala</label>
                <input type="number" class="form-control" name="lingkar_kepala" id="lingkar_kepala"
                    value="{{ $dataPeriodik->lingkar_kepala }}" required>
            </div>
            <div class="col-md-2">
                <label for="keterangan_tinggi" class="form-label">TB / U</label>
                <input type="text" class="form-control" name="keterangan_tinggi" id="keterangan_tinggi"
                    value="{{ $dataPeriodik->keterangan_tinggi }}" required>
            </div>
            <div class="col-md-2">
                <label for="keterangan_berat" class="form-label">BB / U</label>
                <input type="text" class="form-control" name="keterangan_berat" id="keterangan_berat"
                    value="{{ $dataPeriodik->keterangan_berat }}" required>
            </div>
            <div class="col-md-3">
                <label for="alfa" class="form-label">Alfa</label>
                <input type="number" class="form-control" name="alfa" id="alfa" value="{{ $dataPeriodik->alfa }}"
                    required>
            </div>
            <div class="col-md-3">
                <label for="izin" class="form-label">Izin</label>
                <input type="number" class="form-control" name="izin" id="izin"
                    value="{{ $dataPeriodik->izin }}" required>
            </div>
            <div class="col-md-3">
                <label for="sakit" class="form-label">Sakit</label>
                <input type="number" class="form-control" name="sakit" id="sakit"
                    value="{{ $dataPeriodik->sakit }}" required>
            </div>
            <div class="col-md-3">
                <label for="tanpa_keterangan" class="form-label">Tanpa Keterangan</label>
                <input type="number" class="form-control" name="tanpa_keterangan" id="tanpa_keterangan"
                    value="{{ $dataPeriodik->tanpa_keterangan }}" required>
            </div>

            <div class="col-12 text-end">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
@endsection
