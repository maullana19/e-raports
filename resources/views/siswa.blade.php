@extends('layouts.app')

@section('title', 'Data Siswa')

@section('contents')

    <div>
        <h3 class="text-muted">Data Siswa</h3>
    </div>

    <div class="text-end mb-3">
        <a href="{{ route('formDataSiswa') }}" class="btn btn-info">Input Siswa</a>
    </div>

    @if (session('successSiswa'))
        <div class="text-center">
            <p class="text-success">{{ session('successSiswa') }}</p>
        </div>
    @endif

    @if (session('updateSuccess'))
        <div class="text-center">
            <p class="text-success">{{ session('updateSuccess') }}</p>
        </div>
    @endif



    <div class="table-responsive">
        <table class="table align-middle table-striped table-info text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">No Induk</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Kewarganegaraan</th>
                    <th scope="col">Nama Ayah</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col">Pekerjaan Ayah</th>
                    <th scope="col">Pekerjaan Ibu</th>
                    <th scope="col">Anak Ke</th>
                    <th scope="col">Nama Kelas/Kelompok</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto Siswa</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->nama_siswa }}</td>
                        <td>{{ $data->no_induk_siswa }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->tempat_lahir }}</td>
                        <td> {{ \Carbon\Carbon::parse($data->tanggal_lahir)->locale('id_ID')->isoFormat('D MMMM YYYY') }}
                        </td>
                        <td>{{ $data->no_hp }}</td>
                        <td>{{ $data->kewarganegaraan }}</td>
                        <td>{{ $data->nama_ayah }}</td>
                        <td>{{ $data->nama_ibu }}</td>
                        <td>{{ $data->pekerjaan_ayah }}</td>
                        <td>{{ $data->pekerjaan_ibu }}</td>
                        <td>{{ $data->anak_ke }}</td>
                        <td><span class="badge rounded-pill bg-primary">{{ $data->kelas->nama_kelas }}</span></td>
                        <td>{{ $data->alamat }}</td>
                        <td><img class="img-fluid" src="{{ asset('storage/foto_siswa/' . $data->foto_siswa) }}"
                                alt="Foto Siswa"></td>
                        <td>
                            <div class="text-center">
                                <a href="{{ route('editDataSiswaForm', $data->id) }}" class="btn btn-primary btn-sm mb-2">
                                    <span data-feather="edit"></span>
                                </a>
                                <form action="{{ route('hapusDataSiswa', $data->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')">
                                        <span data-feather="trash-2"></span>
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $siswa->links() }}
    </div>
@endsection
