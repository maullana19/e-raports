@extends('layouts.app')

@section('title', 'Ekstrakulikuler')

@section('contents')
    <div>
        <h3 class="text-muted">Data Ekstrakulikuler</h3>
    </div>

    <div class="text-end mb-3">
        <a class="btn btn-info" href="{{ route('formInputEkstrakurikuler') }}">+ Ekstrakurikuler</a>
    </div>


    <div class="table-responsive">
        <table class="table  table-striped table-info text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Kegiatan 1</th>
                    <th scope="col">Kegiatan 2</th>
                    <th scope="col">Kegiatan 3</th>
                    <th scope="col">Kegiatan 4</th>
                    <th scope="col">Kegiatan 5</th>
                    <th scope="col">Nilai Kegiatan 1</th>
                    <th scope="col">Nilai Kegiatan 2</th>
                    <th scope="col">Nilai Kegiatan 3</th>
                    <th scope="col">Nilai Kegiatan 4</th>
                    <th scope="col">Nilai Kegiatan 5</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($dataEktrakurikuler as $ekstrakulikuler)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $ekstrakulikuler->siswa->nama_siswa }}</td>
                        <td>{{ $ekstrakulikuler->kelas->nama_kelas }}</td>
                        <td>{{ $ekstrakulikuler->nama_keg_1 }}</td>
                        <td>{{ $ekstrakulikuler->nama_keg_2 }}</td>
                        <td>{{ $ekstrakulikuler->nama_keg_3 }}</td>
                        <td>{{ $ekstrakulikuler->nama_keg_4 }}</td>
                        <td>{{ $ekstrakulikuler->nama_keg_5 }}</td>
                        <td>{{ $ekstrakulikuler->nilai_keg_1 }}</td>
                        <td>{{ $ekstrakulikuler->nilai_keg_2 }}</td>
                        <td>{{ $ekstrakulikuler->nilai_keg_3 }}</td>
                        <td>{{ $ekstrakulikuler->nilai_keg_4 }}</td>
                        <td>{{ $ekstrakulikuler->nilai_keg_5 }}</td>
                        <td>
                            <form action="{{ route('deleteEkstrakurikuler', $ekstrakulikuler->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
