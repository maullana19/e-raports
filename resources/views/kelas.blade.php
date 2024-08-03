@extends('layouts.app')

@section('title', 'Data Kelas')

@section('contents')

    <div class="mb-3">
        <h3 class="text-muted">Input Data Kelas</h3>
    </div>
    <div class="mb-4 bg-info p-4 rounded shadow-lg">
        <form class="row g-3 needs-validation" action="{{ route('inputKelas') }}" method="POST">
            @csrf
            <div class="col-md-4">
                <label for="nama_kelas" class="form-label text-white">Nama Kelas / Kelompok.</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
            </div>
            <div class="col-md-4">
                <label for="nama_wali_kelas" class="form-label text-white">Nama Wali Kelas.</label>
                <input type="text" class="form-control" id="nama_wali_kelas" name="nama_wali_kelas" required>
            </div>
            <div class="col-md-4">
                <label for="nip_wali_kelas" class="form-label text-white">Nip Wali Kelas. <span
                        class="text-sm text-white">(ketik
                        "-"
                        jika tidak
                        ada.)</span></label>
                <input type="text" class="form-control" id="nip_wali_kelas" name="nip_wali_kelas" required>
            </div>
            <br>
            <div class="col-12 text-end">
                <button class="btn btn-light" type="submit">Simpan</button>
            </div>
        </form>
    </div>

    <div class="mb-3">
        <h3 class="text-muted">Tabel Data Kelas</h3>
    </div>
    <div>
        <table class="table table-striped table-info">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kelas/Kelompok</th>
                    <th scope="col">Nama Wali</th>
                    <th scope="col">NIP Wali</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_kelas as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->nama_kelas }}</td>
                        <td>{{ $data->nama_wali_kelas }}</td>
                        <td>{{ $data->nip_wali_kelas }}</td>
                        <td>
                            <div class="d-flex gap-2 text-center">
                                <div class="">
                                    <a href="{{ route('formEditKelas', $data->id) }}" class="btn btn-primary btn-sm">
                                        <span data-feather="edit"></span></a>
                                </div>
                                <form action="{{ route('deleteKelas', $data->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data kelas ini?')">
                                        <span data-feather="trash-2"></span></button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
