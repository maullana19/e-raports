@extends('layouts.app')

@section('title', 'Raport')

@section('contents')
    <div class="mb-3">
        <h3 class="text-muted fw-bold">Buat Raport</h3>
    </div>

    <div class="col-md-7">
        <div class="table-responsive">
            <table class="table table-hover table-primary shadow-lg">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    @foreach ($dataSiswa as $key => $item)
                        <tr
                            ondblclick="autoFill({{ $item->id }}, '{{ $item->nama_siswa }}', '{{ $item->no_induk_siswa }}', {{ $item->kelas_id }}, '{{ $item->tanggal_lahir }}', '{{ $item->tempat_lahir }}', '{{ $item->tanggal_cetak_raport }}')">
                            <td>{{ $key + 1 }}</td>
                            <td style="cursor: pointer;" class="text-primary">{{ $item->nama_siswa }}</td>
                            <td>{{ $item->no_induk_siswa }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->tempat_lahir }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                @if (count($dataSiswa) >= 10)
                    <button class="btn btn-info" id="loadMore">Load More</button>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-5 ">
        <div class="bg-white shadow-lg card">
            <div class="card-header">
                <h5 class="card-title mb-0 text-center">Cetak Raport</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('cetakPDF') }}" method="post">
                    @csrf
                    <div class="col mb-3">
                        <label for="siswa_id" class="form-label fw-bold">Nama Siswa</label>
                        <input type="hidden" name="siswa_id" id="siswa_id" value="">
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value=""
                            readonly>
                    </div>
                    <div class="col mb-3">
                        <label for="no_induk_siswa" class="form-label fw-bold">NIS</label>
                        <input type="text" class="form-control" id="no_induk_siswa" name="no_induk_siswa" value=""
                            readonly>
                    </div>
                    <div class="col mb-3">
                        <label for="kelas_id" class="form-label fw-bold">Kelas <span class="text-sm text-muted">(id adalah
                                kode
                                utk kelas)</span></label>
                        <input type="text" class="form-control" id="kelas_id" name="kelas_id" value="" readonly>
                    </div>
                    <div class="col mb-4">
                        <label for="tanggal_lahir" class="form-label fw-bold">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value=""
                            readonly>
                    </div>
                    <div class="col mb-4">
                        <label for="tempat_lahir" class="form-label fw-bold">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value=""
                            readonly>
                    </div>
                    <div class="col mb-4">
                        <label for="tanggal_cetak_raport" class="form-label fw-bold">Tanggal Cetak Raport</label>
                        <input type="date" class="form-control" id="tanggal_cetak_raport" name="tanggal_cetak_raport">
                    </div>
                    <hr>
                    <div class="col mb-3">
                        <small class="text-muted">Note : Sebelum atau sesudah mencetak silahkan <span
                                class="fw-bold">Refresh halaman</span>
                            terlebih
                            dahulu.</small>
                    </div>
                    <div class="col mb-3">
                        <hr>
                        <div class="d-flex gap-2">
                            <button type="submit" name="action" value="cover" class="btn btn-danger w-50">Cetak
                                Cover</button>
                            <button type="submit" name="action" value="raport" class="btn btn-info w-50">Cetak
                                Raport</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        function autoFill(siswa_id, nama_siswa, nis, nama_kelas, tanggal_lahir, tempat_lahir, tanggal_cetak_raport) {
            document.getElementById('siswa_id').value = siswa_id;
            document.getElementById('nama_siswa').value = nama_siswa;
            document.getElementById('no_induk_siswa').value = nis;
            document.getElementById('kelas_id').value = nama_kelas;
            document.getElementById('tanggal_lahir').value = tanggal_lahir;
            document.getElementById('tempat_lahir').value = tempat_lahir;
            document.getElementById('tanggal_cetak_raport').value = tanggal_cetak_raport;
        }
    </script>

@endsection
