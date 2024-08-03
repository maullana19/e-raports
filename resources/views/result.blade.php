@extends('layouts.app')

@section('title', 'Result')

@section('contents')
    @if ($siswas->isNotEmpty())
        <h3>Hasil Pencarian Siswa</h3>
        <br>
        @foreach ($siswas as $siswa)
            <div class="card">
                <div class="card-header">
                    <table>
                        <tr>
                            <td>Nama Siswa</td>
                            <td> :</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>NIS </td>
                            <td> :</td>
                            <td>{{ $siswa->no_induk_siswa }}</td>
                        </tr>
                        <tr>
                            <td>Kelas </td>
                            <td> :</td>
                            <td>{{ $siswa->kelas->nama_kelas }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-body">
                    <div>
                        <img class="img-fluid rounded" width="150"
                            src="{{ asset('storage/foto_siswa/' . $siswa->foto_siswa) }}" alt="foto_siswa">
                    </div>
                </div>
            </div>
            <br>
            {{ $siswas->links() }}
        @endforeach
    @else
        <div>
            <p class="text-muted">Tidak ada hasil untuk siswa.</p>
            <br>
            <button onclick="goBack()" class="btn btn-secondary">Kembali</button>

        </div>

    @endif

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

@endsection
