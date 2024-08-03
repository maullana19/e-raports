@extends('layouts.app')

@section('title', 'Form Input Periodik')


@section('contents')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Form Input Periodik</h5>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" action="{{ route('prosesInputPeriodik') }}" method="POST" novalidate>
                @csrf
                <div class="col-md-3">
                    <label for="siswa_id" class="form-label">Nama Siswa</label>
                    <select class="form-select" name="siswa_id" aria-label="Default select example"
                        onchange="getKelas(this)">
                        <option value="" selected>{{ __('Pilih Siswa') }}</option>
                        @foreach ($siswa as $dataSiswa)
                            <option value="{{ $dataSiswa->id }}" data-kelas="{{ $dataSiswa->kelas_id }}"
                                {{ old('siswa_id') == $dataSiswa->id ? 'selected' : '' }}>
                                {{ $dataSiswa->nama_siswa }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="kelas_id" class="form-label">Kelas <small class="text-muted">(id Kelas
                            Biarkan)</small></label>
                    <input type="text" class="form-control" id="kelas_id" name="kelas_id" required readonly>
                </div>
                <div class="col-md-3">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="text" class="form-control" name="semester" id="semester" required>
                </div>
                <div class="col-md-3">
                    <label for="tahun_pelajaran" class="form-label">Tahun Ajaran <small class="text-muted">(Ketik
                            manual)</small></label>
                    <input type="text" class="form-control" name="tahun_pelajaran" id="tahun_pelajaran" required>
                </div>
                <div class="col-md-2">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" class="form-control" name="umur" id="umur" required>
                </div>
                <div class="col-md-2">
                    <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                    <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" required>
                </div>
                <div class="col-md-2">
                    <label for="berat_badan" class="form-label">Berat Badan</label>
                    <input type="text" class="form-control" name="berat_badan" id="berat_badan" required>
                </div>
                <div class="col-md-2">
                    <label for="lingkar_kepala" class="form-label">Lingkar Kepala</label>
                    <input type="text" class="form-control" name="lingkar_kepala" id="lingkar_kepala" required>
                </div>
                <div class="col-md-2">
                    <label for="keterangan_tinggi" class="form-label">TB / U <small class="text-muted">(Ketik
                            manual)</small></label>
                    <input type="text" class="form-control" name="keterangan_tinggi" id="keterangan_tinggi" required>
                </div>
                <div class="col-md-2">
                    <label for="keterangan_berat" class="form-label">BB / U</label>
                    <input type="text" class="form-control" name="keterangan_berat" id="keterangan_berat" required>
                </div>
                <div class="col-md-3">
                    <label for="izin" class="form-label">Izin</label>
                    <input type="text" class="form-control" name="izin" id="izin" required>
                </div>
                <div class="col-md-3">
                    <label for="sakit" class="form-label">Sakit</label>
                    <input type="text" class="form-control" name="sakit" id="sakit" required>
                </div>
                <div class="col-md-3 mb-4">
                    <label for="tanpa_keterangan" class="form-label">Tanpa Keterangan</label>
                    <input type="text" class="form-control" name="tanpa_keterangan" id="tanpa_keterangan" required>
                </div>
                <div class="col-md-6">
                    <small class="text-muted">Ket : Semua kolom harus diisi, jika tidak ada data silahkan diisi dengan '-',
                        semua kolom dibuat
                        berdasarkan penginputan manual, karena tiap siswa berbeda-beda data jadi silahkan cek kembali data
                        siswa yang diinputkan.</small>
                </div>
                <div class="col-md-6 text-end">
                    <button class="btn btn-info" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function getKelas(selectObject) {
            var value = selectObject.value;
            var kelas = selectObject.options[selectObject.selectedIndex].getAttribute('data-kelas');
            document.getElementById('kelas_id').value = kelas;
        }
    </script>
@endsection
