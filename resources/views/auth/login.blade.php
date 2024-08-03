<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Login | E-Raport</title>

    <link href="adminkit/static/css/app.css" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset('adminkit/static/img/photos/school-bg.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="text-white fw-bold">Selamat Datang Di Aplikasi <span
                                    class="text-info">eRaport</span> </h1>
                            <p class="lead text-white">
                                Paud Athaya
                            </p>
                        </div>
                        <div class="card bg-white">
                            <div class="card-body">
                                @if (session('loginError'))
                                    <div class="text-center">
                                        <p class="text-danger">{{ session('loginError') }}</p>
                                    </div>
                                @endif
                                @if (session('mustLogin'))
                                    <div class="text-center">
                                        <p class="text-danger">{{ session('mustLogin') }}</p>
                                    </div>
                                @endif
                                <div class="m-sm-3">
                                    <form action="{{ route('login-process') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label fw-bold text-muted">Username</label>
                                            <input class="form-control form-control-lg" type="text"
                                                name="username" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold text-muted">Password</label>
                                            <input class="form-control form-control-lg" type="password"
                                                name="password" />
                                        </div>
                                        <br>
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn btn-lg btn-info">MASUK</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white mb-3">
                            Belum punya akun? <a href="{{ route('register-form') }}" class="text-info">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="adminkit/static/js/app.js"></script>

</body>

</html>
