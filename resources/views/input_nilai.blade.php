@extends('layouts.app')

@section('title', 'Input Nilai')


@section('contents')
    @php
        $nilaia1 =
            'Anak percaya kepada Tuhan Yang Maha Esa, Mulai mengenal dan mempraktikan ajaran pokok sesuai dengan agama dan kepercayaan Nya.';
        $nilaia2 =
            'Anak berpartisipasi aktif dalam menjaga, kebersihan, kesehatan dan keselamatan diri sebagai bentuk rasa sayang terhadap dirinya dan rasa syukur pada Tuhan Yang Maha Esa.';
        $nilaia3 =
            'Anak menghargai sesama manusia dengan berbagai perbedaanya dan mempraktikan perilaku baik dan berakhlak mulia.';
        $nilaia4 =
            'Anak menghargai alam dengan cara merawatnya dan menunjukan rasa sayang terhadap makhluk hidup yang merupakan ciptaan Tuhan Yang Maha Esa.';
    @endphp

    <div class="card ">
        <div class="card-header d-flex align-items-center justify-content-between" style="background-color: #4D869C;">
            <h5 class="card-title mb-0 text-white">Silahkan Input Nilai</h5>
        </div>
        <div class="card-body">
            <form class="row g-3 " action="{{ route('inputNilai') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-3">
                    <label for="siswa_id" class="form-label fw-bold">Nama Siswa</label>
                    <select class="form-select" name="siswa_id" aria-label="Default select example">
                        <option value="" selected>{{ __('Pilih Siswa') }}</option>
                        @foreach ($dataSiswa as $siswa)
                            <option value="{{ $siswa->id }}" {{ old('siswa_id') == $siswa->id ? 'selected' : '' }}>
                                {{ $siswa->nama_siswa }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="kelas_id" class="form-label fw-bold">Nama Kelas</label>
                    <select class="form-select" name="kelas_id" aria-label="Default select example">
                        <option value="" selected>{{ __('Pilih Kelas') }}</option>
                        @foreach ($dataKelas as $kelas)
                            <option value="{{ $kelas->id }}" {{ old('kelas_id') == $kelas->id ? 'selected' : '' }}>
                                {{ $kelas->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="semester" class="form-label fw-bold">Semester</label>
                    <input type="text" class="form-control" id="semester" name="semester">
                </div>
                <div class="col-md-3">
                    <label for="tahun_pelajaran" class="form-label fw-bold">Tahun Ajaran</label>
                    <input type="text" class="form-control" id="tahun_pelajaran" name="tahun_pelajaran">
                </div>
                <hr>
                {{-- ELEMEN NILAI I --}}
                <div>
                    <h4 class="card-title">INPUT ELEMEN NILAI AGAMA DAN BUDI PEKERTI </h4>
                </div>
                <div class="col-md-10">
                    <label for="nilai_a1" class="form-label fw-bold">Nilai ABP.1</label>
                    <input type="text" class="form-control" id="nilai_a1" name="nilai_a1"
                        value="{{ old('nilai_a1', $nilaia1) }}">
                </div>
                <div class="col-md-2">
                    <label for="ases_a1" class="form-label fw-bold">Ket, Nilai ABP.1</label>
                    <select class="form-select" name="ases_a1" aria-label="Default select example">
                        @foreach ($dataAssesmen as $assesmen)
                            <option value="{{ $assesmen->nama_assesmen }}">{{ $assesmen->nama_assesmen }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-10">
                    <label for="nilai_a2" class="form-label fw-bold">Nilai ABP.2</label>
                    <input type="text" class="form-control" id="nilai_a2" name="nilai_a2"
                        value="{{ old('nilai_a2', $nilaia2) }}">
                </div>
                <div class="col-md-2">
                    <label for="kelas_id" class="form-label fw-bold">Ket, Nilai ABP.2</label>
                    <select class="form-select" name="ases_a2" aria-label="Default select example">
                        @foreach ($dataAssesmen as $assesmen)
                            <option value="{{ $assesmen->nama_assesmen }}">{{ $assesmen->nama_assesmen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-10">
                    <label for="nilai_a3" class="form-label fw-bold">Nilai ABP.3</label>
                    <input type="text" class="form-control" id="nilai_a3" name="nilai_a3"
                        value="{{ old('nilai_a3', $nilaia3) }}">
                </div>
                <div class="col-md-2">
                    <label for="kelas_id" class="form-label fw-bold">Ket, Nilai ABP.3</label>
                    <select class="form-select" name="ases_a3" aria-label="Default select example">
                        @foreach ($dataAssesmen as $assesmen)
                            <option value="{{ $assesmen->nama_assesmen }}">{{ $assesmen->nama_assesmen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-10">
                    <label for="nilai_a4" class="form-label fw-bold">Nilai ABP.4</label>
                    <input type="text" class="form-control" id="nilai_a4" name="nilai_a4"
                        value="{{ old('nilai_a4', $nilaia4) }}">
                </div>
                <div class="col-md-2">
                    <label for="nilai_a4" class="form-label fw-bold">Ket, Nilai ABP.4</label>
                    <select class="form-select" name="ases_a4" aria-label="Default select example">
                        @foreach ($dataAssesmen as $assesmen)
                            <option value="{{ $assesmen->nama_assesmen }}">{{ $assesmen->nama_assesmen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="deskripsi_nilai_a" class="form-label fw-bold">Deskripsi Nilai Agama & Budi Pekerti</label>
                    <input type="text" class="form-control" id="deskripsi_nilai_a" name="deskripsi_nilai_a">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_a1" class="form-label fw-bold">Foto Kegiatan ABP 1</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_a1"
                        name="foto_kegiatan_a1">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_a2" class="form-label fw-bold">Foto Kegiatan ABP 2</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_a2"
                        name="foto_kegiatan_a2">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_a3" class="form-label fw-bold">Foto Kegiatan ABP 3</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_a3"
                        name="foto_kegiatan_a3">
                </div>
                <hr>

                <div>
                    <h5 class="card-title">ELEMEN JATI DIRI </h5>
                </div>
                <div class="col-md-10">
                    <label for="nilai_b1" class="form-label fw-bold">Nilai JD.1</label>
                    <input type="text" class="form-control" id="nilai_b1" name="nilai_b1">
                </div>
                <div class="col-md-2">
                    <label for="nilai_b1" class="form-label fw-bold">Ket, JD B.1</label>
                    <select class="form-select" name="ases_b1" aria-label="Default select example">
                        @foreach ($dataAssesmen as $assesmen)
                            <option value="{{ $assesmen->nama_assesmen }}">{{ $assesmen->nama_assesmen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-10">
                    <label for="nilai_b2" class="form-label fw-bold">Nilai JD.2</label>
                    <input type="text" class="form-control" id="nilai_b2" name="nilai_b2">
                </div>
                <div class="col-md-2">
                    <label for="nilai_b2" class="form-label fw-bold">Ket, Nilai JD.2</label>
                    <select class="form-select" name="ases_b2" aria-label="Default select example">
                        @foreach ($dataAssesmen as $assesmen)
                            <option value="{{ $assesmen->nama_assesmen }}">{{ $assesmen->nama_assesmen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-10">
                    <label for="nilai_b3" class="form-label fw-bold">Nilai JD.3</label>
                    <input type="text" class="form-control" id="nilai_b3" name="nilai_b3">
                </div>
                <div class="col-md-2">
                    <label for="nilai_b3" class="form-label fw-bold">Ket, Nilai JD.3</label>
                    <select class="form-select" name="ases_b3" aria-label="Default select example">
                        @foreach ($dataAssesmen as $assesmen)
                            <option value="{{ $assesmen->nama_assesmen }}">{{ $assesmen->nama_assesmen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-10">
                    <label for="nilai_b4" class="form-label fw-bold">Nilai JD.4</label>
                    <input type="text" class="form-control" id="nilai_b4" name="nilai_b4">
                </div>
                <div class="col-md-2">
                    <label for="nilai_b4" class="form-label fw-bold">Ket, JD.4</label>
                    <select class="form-select" name="ases_b4" aria-label="Default select example">
                        @foreach ($dataAssesmen as $assesmen)
                            <option value="{{ $assesmen->nama_assesmen }}">{{ $assesmen->nama_assesmen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="deskripsi_nilai_b" class="form-label fw-bold">Deskripsi Nilai Jati Diri</label>
                    <input type="text" class="form-control" id="deskripsi_nilai_b" name="deskripsi_nilai_b">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_b1" class="form-label fw-bold">Foto Kegiatan Jati diri 1</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_b1"
                        name="foto_kegiatan_b1">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_b2" class="form-label fw-bold">Foto Kegiatan Jati diri 2</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_b2"
                        name="foto_kegiatan_b2">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_b3" class="form-label fw-bold">Foto Kegiatan Jati diri 3</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_b3"
                        name="foto_kegiatan_b3">
                </div>
                <hr>
                {{-- ELEMEN III --}}
                <div>
                    <h5 class="card-title">DASAR-DASAR LITERASI, MATEMATIKA, SAINS TEKNOLOGI REKAYASA DAN SENI </h5>
                </div>
                @for ($i = 1; $i <= 7; $i++)
                    <div class="col-md-10">
                        <label for="nilai_c{{ $i }}" class="form-label fw-bold">Kolom MSTRS
                            {{ $i }}</label>
                        <input type="text" class="form-control" id="nilai_c{{ $i }}"
                            name="nilai_c{{ $i }}">
                    </div>
                    <div class="col-md-2">
                        <label for="nilai_c{{ $i }}" class="form-label fw-bold">Ket Kolom
                            {{ $i }}</label>
                        <select class="form-select" name="ases_c{{ $i }}"
                            aria-label="Default select example">
                            @foreach ($dataAssesmen as $assesmen)
                                <option value="{{ $assesmen->nama_assesmen }}">{{ $assesmen->nama_assesmen }}</option>
                            @endforeach
                        </select>
                    </div>
                @endfor

                <div class="col-md-12">
                    <label for="deskripsi_nilai_c" class="form-label fw-bold">Deskripsi MSTRS</label>
                    <input type="text" class="form-control" id="deskripsi_nilai_c" name="deskripsi_nilai_c">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_c1" class="form-label fw-bold">Foto Kegiatan MSTRS.1</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_c1"
                        name="foto_kegiatan_c1">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_c2" class="form-label fw-bold">Foto Kegiatan MSTRS.2</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_c2"
                        name="foto_kegiatan_c2">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_c3" class="form-label fw-bold">Foto Kegiatan MSTRS.3</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_c3"
                        name="foto_kegiatan_c3">
                </div>
                <hr>

                <div>
                    <h5 class="card-title">NILAI P5 </h5>
                </div>
                {{-- Input Nilai P5 --}}
                <div class="col-md-6">
                    <label for="nilai_p5" class="form-label">Nilai P.5</label>
                    <input type="text" class="form-control" id="nilai_p5" name="nilai_p5">
                </div>
                <div class="col-md-6">
                    <label for="tema_p5" class="form-label">tema P.5</label>
                    <input type="text" class="form-control" id="tema_p5" name="tema_p5">
                </div>

                <div class="col-md-12">
                    <label for="deskripsi_nilai_p5" class="form-label">Deskripsi Nilai P5</label>
                    <input type="text" class="form-control" id="deskripsi_nilai_p5" name="deskripsi_nilai_p5">
                </div>
                <div class="col-md-12">
                    <label for="deskripsi_umum_p5" class="form-label">Deskripsi Umum P5</label>
                    <input type="text" class="form-control" id="deskripsi_umum_p5" name="deskripsi_umum_p5">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_p1" class="form-label">Foto Kegiatan P.1</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_p1"
                        name="foto_kegiatan_p1">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_p2" class="form-label">Foto Kegiatan P.2</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_p2"
                        name="foto_kegiatan_p2">
                </div>
                <div class="col-md-4">
                    <label for="foto_kegiatan_p3" class="form-label">Foto Kegiatan P.3</label>
                    <input class="form-control form-control-sm" type="file" id="foto_kegiatan_p3"
                        name="foto_kegiatan_p3">
                </div>
                <div class="col-12 text-end mt-5">
                    <button class="btn btn-info" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
