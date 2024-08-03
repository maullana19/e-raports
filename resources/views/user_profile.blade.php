@extends('layouts.app')

@section('title', Auth::user()->name)

@section('contents')
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profil</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('storage/foto_user/' . Auth::user()->foto_user) }}" alt="{{ Auth::user()->name }}"
                        class="img-fluid rounded-circle mb-2" width="128" height="128" />

                    <h5 class="card-title mb-0">{{ Auth::user()->name }}</h5>
                    @if (Auth::user()->roles->id == 1)
                        <div class="text-muted mb-4">@lang('Admin')</div>
                    @elseif(Auth::user()->roles->id == 2)
                        <div class="text-muted mb-2">@lang('Guru')</div>
                    @endif
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <h5 class="h6 card-title">Data User</h5>
                    <ul class="list-unstyled mb-0 text-sm">
                        <li class="mb-1">Nip : {{ auth::user()->nip }}</li>
                        <li class="mb-1">Username : {{ auth::user()->username }}</li>
                        <li class="mb-1">Email : {{ auth::user()->email }}</li>
                        <li class="mb-1">No Hp : {{ auth::user()->no_hp }}</li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xl-9">
            <div class="card p-2">
                <div class="card-header">
                    <h5 class="card-title mb-0">Detail</h5>
                </div>
                <div class="card-body ">
                    <form action="{{ route('updateUser', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @if (session('successEditUser'))
                            <div class="text-center">
                                <p class="text-success">{{ session('successEditUser') }}</p>
                            </div>
                        @endif

                        <div class="form-group mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                value="{{ Auth::user()->username }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <small class="text-muted">Kosongkan jika tidak ingin mengganti password</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirmation"
                                id="password_confirmation">
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_hp">No Hp</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp"
                                value="{{ Auth::user()->no_hp }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nip">Nip</label>
                            <input type="text" class="form-control" name="nip" id="nip"
                                value="{{ Auth::user()->nip }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="role">Roles</label>
                            <input type="text" class="form-control" name="role" id="role" value="user"
                                readonly>
                        </div>
                        <br>
                        <div class="form-group mb-3">
                            <label for="current_photo">Foto Pengguna</label><br>
                            @if (Auth::user()->foto_user)
                                <img src="{{ asset('storage/foto_user/' . Auth::user()->foto_user) }}" alt="Foto Pengguna"
                                    style="max-width: 200px;">
                            @else
                                <small class="text-muted">Foto Pengguna Belum Diupload.</small>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label for="foto_user">Upload Foto</label>
                            <input type="file" class="form-control" name="foto_user" id="foto_user">
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-info w-100">Ubah</button>
                        </div>
                    </form>
                    <hr>
                    <div class="d-grid gap-2 mt-3">
                        <form action="{{ route('deleteUser', Auth::user()->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">Hapus Akun</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
