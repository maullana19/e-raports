@extends('layouts.app')

@section('title', 'Form Edit Kelas')

@section('contents')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Edit Kelas</h4>
        </div>
        <div class="card-body">

            <form action="{{ route('editKelas', $kelas->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_kelas" class="form-label">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"
                        value="{{ $kelas->nama_kelas }}">
                </div>
                <div class="mb-3">
                    <label for="nama_wali_kelas" class="form-label">Nama Wali Kelas</label>
                    <input type="text" class="form-control" id="nama_wali_kelas" name="nama_wali_kelas"
                        value="{{ $kelas->nama_wali_kelas }}">
                </div>
                <div class="mb-3">
                    <label for="nip_wali_kelas" class="form-label">NIP Wali Kelas</label>
                    <input type="text" class="form-control" id="nip_wali_kelas" name="nip_wali_kelas"
                        value="{{ $kelas->nip_wali_kelas }}">
                </div>
                <br>
                <div class="text-end">
                    <button type="submit" class="btn btn-info">Ubah</button>
                </div>

            </form>

        </div>
    </div>
@endsection
