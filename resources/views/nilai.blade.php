@extends('layouts.app')

@section('title', 'Nilai Siswa')


@section('contents')
    <div>
        <h3>Data Nilai Siswa</h3>
    </div>

    <div class="text-end mb-3">
        <a href="{{ route('formDataNilai') }}" class="btn btn-info text-end">Input Nilai</a>
    </div>

    <div class="table-responsive rounded">
        <table class="table table-bordered table-primary text-center  align-middle " id="table_siswa">
            <thead>
                <th scope="col"><small>No</small></th>
                <th scope="col"><small>Nama Siswa</small></th>
                <th scope="col"><small>Kelas</small></th>
                <th scope="col"><small>Semester</small></th>
                <th scope="col"><small>Tahun Ajaran</small></th>
                <th scope="col"><small>Nilai ELEMEN A1</small></th>
                <th scope="col"><small>Nilai ELEMEN A2</small></th>
                <th scope="col"><small>Nilai ELEMEN A3</small></th>
                <th scope="col"><small>Nilai ELEMEN A4</small></th>
                <th scope="col"><small>Keterangan A1</small></th>
                <th scope="col"><small>Keterangan A2</small></th>
                <th scope="col"><small>Keterangan A3</small></th>
                <th scope="col"><small>Keterangan A4</small></th>
                <th scope="col"><small>Nilai ELEMEN B1</small></th>
                <th scope="col"><small>Nilai ELEMEN B2</small></th>
                <th scope="col"><small>Nilai ELEMEN B3</small></th>
                <th scope="col"><small>Nilai ELEMEN B4</small></th>
                <th scope="col"><small>Keterangan B1</small></th>
                <th scope="col"><small>Keterangan B2</small></th>
                <th scope="col"><small>Keterangan B3</small></th>
                <th scope="col"><small>Keterangan B4</small></th>
                <th scope="col"><small>Nilai ELEMEN C1</small></th>
                <th scope="col"><small>Nilai ELEMEN C2</small></th>
                <th scope="col"><small>Nilai ELEMEN C3</small></th>
                <th scope="col"><small>Nilai ELEMEN C4</small></th>
                <th scope="col"><small>Nilai ELEMEN C5</small></th>
                <th scope="col"><small>Nilai ELEMEN C6</small></th>
                <th scope="col"><small>Nilai ELEMEN C7</small></th>
                <th scope="col"><small>Keterangan C1</small></th>
                <th scope="col"><small>Keterangan C2</small></th>
                <th scope="col"><small>Keterangan C3</small></th>
                <th scope="col"><small>Keterangan C4</small></th>
                <th scope="col"><small>Keterangan C5</small></th>
                <th scope="col"><small>Keterangan C6</small></th>
                <th scope="col"><small>Keterangan C7</small></th>
                <th scope="col"><small>Tema P5</small></th>
                <th scope="col"><small>Nilai P5</small></th>
                <th scope="col"><small>Deskripsi Nilai A</small></th>
                <th scope="col"><small>Deskripsi Nilai B</small></th>
                <th scope="col"><small>Deskripsi Nilai C</small></th>
                <th scope="col"><small>Deskripsi Nilai P5</small></th>
                <th scope="col"><small>Deskripsi Umum P5</small></th>
                <th scope="col"><small>Action</small></th>
            </thead>
            <tbody>
                @foreach ($dataNilai as $n)
                    <tr>
                        <th scope="row"><small>{{ $loop->iteration }}</small></th>
                        <td><small>
                                {{ $n->siswa->nama_siswa }}
                            </small>
                        </td>
                        {{-- Nilai Elemen A --}}
                        <td><small>{{ $n->kelas->nama_kelas }}</small></td>
                        <td><small>{{ $n->semester }}</small></td>
                        <td><small>{{ $n->tahun_pelajaran }}</small></td>
                        <td><small>{{ $n->nilai_a1 }}</small></td>
                        <td><small>{{ $n->nilai_a2 }}</small></td>
                        <td><small>{{ $n->nilai_a3 }}</small></td>
                        <td><small>{{ $n->nilai_a4 }}</small></td>
                        <td><small>{{ $n->ases_a1 }}</small></td>
                        <td><small>{{ $n->ases_a2 }}</small></td>
                        <td><small>{{ $n->ases_a3 }}</small></td>
                        <td><small>{{ $n->ases_a4 }}</small></td>
                        {{-- Nilai Elemen B --}}
                        <td><small>{{ $n->nilai_b1 }}</small></td>
                        <td><small>{{ $n->nilai_b2 }}</small></td>
                        <td><small>{{ $n->nilai_b3 }}</small></td>
                        <td><small>{{ $n->nilai_b4 }}</small></td>
                        <td><small>{{ $n->ases_b1 }}</small></td>
                        <td><small>{{ $n->ases_b2 }}</small></td>
                        <td><small>{{ $n->ases_b3 }}</small></td>
                        <td><small>{{ $n->ases_b4 }}</small></td>
                        {{-- Nilai Elemen C --}}
                        <td><small>{{ $n->nilai_c1 }}</small></td>
                        <td><small>{{ $n->nilai_c2 }}</small></td>
                        <td><small>{{ $n->nilai_c3 }}</small></td>
                        <td><small>{{ $n->nilai_c4 }}</small></td>
                        <td><small>{{ $n->nilai_c5 }}</small></td>
                        <td><small>{{ $n->nilai_c6 }}</small></td>
                        <td><small>{{ $n->nilai_c7 }}</small></td>
                        <td><small>{{ $n->ases_c1 }}</small></td>
                        <td><small>{{ $n->ases_c2 }}</small></td>
                        <td><small>{{ $n->ases_c3 }}</small></td>
                        <td><small>{{ $n->ases_c4 }}</small></td>
                        <td><small>{{ $n->ases_c5 }}</small></td>
                        <td><small>{{ $n->ases_c6 }}</small></td>
                        <td><small>{{ $n->ases_c7 }}</small></td>
                        {{-- Tema P5 --}}
                        <td><small>{{ $n->tema_p5 }}</small></td>
                        <td><small>{{ $n->nilai_p5 }}</small></td>
                        <td><small>{{ $n->deskripsi_nilai_a }}</small></td>
                        <td><small>{{ $n->deskripsi_nilai_b }}</small></td>
                        <td><small>{{ $n->deskripsi_nilai_c }}</small></td>
                        <td><small>{{ $n->deskripsi_nilai_p5 }}</small></td>
                        <td><small>{{ $n->deskripsi_umum_p5 }}</small></td>
                        {{-- Tombol Delete --}}
                        <td>
                            <form action="{{ route('deleteNilai', $n->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <span data-feather="trash-2"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    {{-- Buat ajax pencarian data siswa --}}

    <script>
        $(document).ready(function() {
            $('#myInput').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $.ajax({
                    url: '{{ route('searchSiswa') }}',
                    type: 'GET',
                    data: {
                        keyword: value
                    },
                    success: function(response) {
                        $('#result').html(response);
                    }
                });
            });
        });
    </script>
@endsection
