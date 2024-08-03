<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Aplikasi</title>
    <link href="{{ asset('adminkit/static/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container col-xxl-8 px-4 py-5 bg-white">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ asset('adminkit/static/img/logo/logo_athaya.jpg') }}" class="d-block mx-lg-auto img-fluid"
                    alt="logo" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Selamat Datang di aplikasi <span class="text-info">
                        eRaport</span> </h1>
                <p class="lead">Aplikasi yang dibuat khusus untuk pembuatan Raport Siswa PAUD Athaya.</p>
                <hr>
                <p class="lead">Ketentuan Hak Cipta</p>
                <p>Hak cipta atas semua kontribusi dalam pembuatan aplikasi ini, termasuk tetapi tidak terbatas pada
                    kode sumber, desain, dan materi kreatif lainnya, adalah milik Dede Maulana. Namun, kepemilikan penuh
                    atas aplikasi secara keseluruhan dimiliki oleh Kepala PAUD Athaya Affrina Shiam Munandar, S.Pd,
                    sesuai dengan kesepakatan yang telah disetujui bersama.
                </p>
                <p>Segala bentuk penyalinan, modifikasi, atau penyebarluasan aplikasi ini tanpa izin tertulis dari
                    Kepala PAUD adalah dilarang keras. Pelanggaran terhadap ketentuan ini dapat mengakibatkan kerusakan
                    pada aplikasi dan masalah lainnya.</p>

                <hr>
                <small>Untuk info lebih lanjut silahkan Hub Kepala Paud Athaya</small>

                <div class="mt-4">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali</a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
