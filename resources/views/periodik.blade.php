@extends('layouts.app')

@section('title', 'Periodik')

@section('contents')
    <div>
        <h3 class="text-muted">Data Ekstrakulikuler</h3>
    </div>
    <div class="text-end mb-3">
        <a class="btn btn-info" href="{{ route('formInputPeriodik') }}">+ Periodik</a>
    </div>
    @if (session('successPeriodik'))
        <div class="text-center">
            <p class="text-success">{{ session('successPeriodik') }}</p>
        </div>
    @endif
    <div class="table-responsive ">
        <table class="table align-middle table-striped table-info rounded shadow-lg">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Tahun Ajaran</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Tinggi</th>
                    <th scope="col">Berat</th>
                    <th scope="col">TB/U</th>
                    <th scope="col">BB/U</th>
                    <th scope="col">Lingkar Kepala</th>
                    <th scope="col">Izin</th>
                    <th scope="col">Sakit</th>
                    <th scope="col">Tnp. Ket</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPeriodik as $index => $periodik)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $periodik->siswa->nama_siswa }}</td>
                        <td>{{ $periodik->kelas->nama_kelas }}</td>
                        <td>{{ $periodik->semester }}</td>
                        <td>{{ $periodik->tahun_pelajaran }}</td>
                        <td>{{ $periodik->umur }}</td>
                        <td>{{ $periodik->tinggi_badan }}</td>
                        <td>{{ $periodik->berat_badan }}</td>
                        <td>{{ $periodik->keterangan_tinggi }}</td>
                        <td>{{ $periodik->keterangan_berat }}</td>
                        <td>{{ $periodik->lingkar_kepala }}</td>
                        <td>{{ $periodik->izin }}</td>
                        <td>{{ $periodik->sakit }}</td>
                        <td>{{ $periodik->tanpa_keterangan }}</td>
                        <td>
                            <div class="text-center">
                                <a href="{{ route('formEditPeriodik', $periodik->id) }}" class="btn btn-info  btn-sm mb-2">
                                    <span data-feather="edit"></span>
                                </a>

                                <form action="{{ route('deletePeriodik', $periodik->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <span data-feather="trash-2"></span>
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
