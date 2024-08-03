<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Register | E-Raport</title>
    <link href="adminkit/static/css/app.css" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100 bg-info">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="text-white">Daftar Akun eRaport Paud Athaya</h1>
                            <p>
                                Silahkan Hubungi Admin untuk info lebih lanjut.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                @if (session('successRegister'))
                                    <div class="text-center">
                                        <p class="text-success">{{ session('successRegister') }}</p>
                                    </div>
                                @endif
                                <div class="m-sm-3">
                                    <form action="{{ route('register-process') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input class="form-control " type="text" name="name"
                                                value="{{ old('name') }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control " type="text" name="username"
                                                value="{{ old('username') }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">NIP</label>
                                            <input class="form-control " type="text" name="nip"
                                                value="{{ old('nip') }}" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control " type="email" name="email"
                                                value="{{ old('email') }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">No HP</label>
                                            <input class="form-control " type="text" name="no_hp"
                                                value="{{ old('no_hp') }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control " type="password" name="password" />
                                        </div>
                                        <input type="hidden" name="role_id" value="2">

                                        <br>
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn  btn-info">DAFTAR</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            Sudah Punya Akun? <a href="{{ route('login-form') }}">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="adminkit/static/js/app.js"></script>

</body>

</html>
