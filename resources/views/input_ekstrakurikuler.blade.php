@extends('layouts.app')

@section('title', 'Input Ekstrakulikuler')

@section('contents')

    <div class="card">
        <div class="card-header">
            <h3 class="text-muted">Form Input Data Ekstrakulikuler</h3>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" id="formEkstrakurikuler" action="{{ route('prosesInputEkstrakurikuler') }}"
                method="POST">
                @csrf
                <div class="col-md-6">
                    <label for="siswa_id" class="form-label">Nama Siswa</label>
                    <select class="form-select" name="siswa_id" aria-label="Default select example"
                        onchange="getKelas(this)">
                        <option value="" selected>{{ __('Pilih Siswa') }}</option>
                        @foreach ($dataSiswa as $siswa)
                            <option value="{{ $siswa->id }}" data-kelas="{{ $siswa->kelas_id }}"
                                {{ old('siswa_id') == $siswa->id ? 'selected' : '' }}>
                                {{ $siswa->nama_siswa }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" class="form-control" id="kelas_id" name="kelas_id" required readonly>
                @php
                    $defaultValues = ['Tahfidz', 'Melukis', 'Menari', 'Pianika', 'Baris-berbaris'];
                @endphp

                @for ($i = 0; $i < 5; $i++)
                    <div class="col-md-9">
                        <label for="nama_keg_{{ $i + 1 }}" class="form-label">Nama Kegiatan
                            {{ $i + 1 }}</label>
                        <input type="text" class="form-control" id="nama_keg_{{ $i + 1 }}"
                            name="nama_keg_{{ $i + 1 }}" required
                            value="{{ old('nama_keg_' . ($i + 1), $defaultValues[$i]) }}">
                    </div>
                    <div class="col-md-3">
                        <label for="nilai_keg_{{ $i + 1 }}" class="form-label">Nilai Kegiatan
                            {{ $i + 1 }}</label>
                        <select class="form-select" name="nilai_keg_{{ $i + 1 }}"
                            aria-label="Default select example">
                            @foreach ($dataAssesmen as $assesmen)
                                <option value="{{ $assesmen->nama_assesmen }}"
                                    {{ old('nilai_keg_' . ($i + 1)) == $assesmen->nama_assesmen ? 'selected' : '' }}>
                                    {{ $assesmen->nama_assesmen }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endfor
                <div class="col-12 mt-4 text-end">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>

        <script>
            function getKelas(selectObject) {
                var value = selectObject.value;
                var kelas = selectObject.options[selectObject.selectedIndex].getAttribute('data-kelas');
                document.getElementById('kelas_id').value = kelas;
            }
        </script>

    </div>

@endsection
