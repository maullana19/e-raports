<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <title>eRaport - @yield('title')</title>

    <link href="adminkit/static/css/app.css" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <x-sidebars />

        <div class="main">
            <x-navbars />

            <main class="content">
                <div class="container-fluid p-0 m-0">
                    <div class="row">
                        @yield('contents')
                    </div>

                </div>
            </main>

            <footer class="footer border-top">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 ">
                            <div class="d-flex gap-4">
                                <div>
                                    <p class="mb-0">
                                        <a class="text-muted fw-bold" href="#" target="_blank">PAUD ATHAYA - Tahun
                                            Ajaran
                                            {{ date('Y', strtotime('-1 year')) . '/' . date('Y') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="adminkit/static/img/logo/logo_kumer.png" width="52px" height="24px" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <script src="adminkit/static/js/app.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                nextArrow: "<span title=\"Next month\">&raquo;</span>",
                defaultDate: defaultDate
            });
        });
    </script>

</body>

</html>
