@extends('layouts.app')

@section('title', 'Edit Identitas Sekolah')


@section('contents')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between" style="background-color: #4D869C;">
            <h5 class="card-title mb-0 text-white">Identitas Sekolah</h5>
        </div>
        <div class="card-body py-3">
            <form action="{{ route('updateIdentitas', $identitas->id) }}" method="post">
                @csrf
                @method('PUT')
                <table class="table table-striped">
                    <tr>
                        <th scope="row">NPSN</th>
                        <td>
                            <input type="text" class="form-control" name="npsn" value="{{ $identitas->npsn }}">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Jenjang</th>
                        <td>
                            <input type="text" class="form-control" name="jenjang" value="{{ $identitas->jenjang }}">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Status Akreditasi</th>
                        <td>
                            <input type="text" class="form-control" name="status_akreditasi"
                                value="{{ $identitas->status_akreditasi }}">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Lokasi</th>
                        <td>
                            <input type="text" class="form-control" name="lokasi" value="{{ $identitas->lokasi }}">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Semester</th>
                        <td>
                            <input type="text" class="form-control" name="semester" value="{{ $identitas->semester }}">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Tahun Ajaran</th>
                        <td>
                            <input type="text" class="form-control" name="tahun_ajaran"
                                value="{{ $identitas->tahun_ajaran }}">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Kepala Sekolah</th>
                        <td>
                            <input type="text" class="form-control" name="nama_kepala"
                                value="{{ $identitas->nama_kepala }}">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">NIP</th>
                        <td>
                            <input type="text" class="form-control" name="nip" value="{{ $identitas->nip }}">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Admin</th>
                        <td>
                            <input type="text" class="form-control" name="admin" value="{{ $identitas->admin }}">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Jabatan</th>
                        <td>
                            <input type="text" class="form-control" name="jabatan" value="{{ $identitas->jabatan }}">
                        </td>
                    </tr>
                </table>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-info ms-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
