<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'e-aduan MAIWP Labuan')">
    <meta name="author" content="@yield('meta_author', 'Jabatan Teknologi MAIWP')">
    <link rel="shortcut icon" href="{{ asset('theme/default/images/favicon.ico') }}">

    <link href="{{ asset('theme/default/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/default/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/default/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-white">
<div class="mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">

                <div class="text-center">
                    <span><img src="{{ asset('img/maiwp/icon.png') }}" alt="" height="100"></span>
                    <h3 class="mt-4">Majlis Agama Islam Wilayah Persekutuan <br>Cawangan Labuan</h3>
                    <p class="text-muted"></p>

                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="text-center mt-3 pl-1 pr-1">
                                <div class="avatar-md rounded-circle bg-soft-danger mx-auto">
                                    <i class="dripicons-web font-22 avatar-title text-danger"></i>
                                </div>
                                <h5 class="text-uppercase mt-3">Laman Web Utama</h5>
                                <p class="text-muted"></p>
                                <a class="text-danger font-weight-bold" href="https://www.maiwp.gov.my/i/index.php/en/">Pautan</a>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-md-4">
                            <div class="text-center mt-3 pl-1 pr-1">
                                <div class="avatar-md rounded-circle bg-soft-danger mx-auto">
                                    <i class="dripicons-message font-22 avatar-title text-danger"></i>
                                </div>
                                <h5 class="text-uppercase mt-3">Sistem Aduan Baitulmal MAIWP</h5>
                                <p class="text-muted"></p>
                                <a class="text-danger font-weight-bold" href="{{ route('frontend.aduan.index') }}">Pautan</a>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-md-4">
                            <div class="text-center mt-3 pl-1 pr-1">
                                <div class="avatar-md rounded-circle bg-soft-danger mx-auto">
                                    <i class="dripicons-user font-22 avatar-title text-danger"></i>
                                </div>
                                <h5 class="text-uppercase mt-3">KEGUNAAN MAIWP</h5>
                                <p class="text-muted"></p>
                                <a class="text-danger font-weight-bold" href="{{ route('frontend.auth.login') }}">Pautan</a>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- end /.text-center-->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<footer class="footer footer-alt">
    2015 - 2019 &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a>
</footer>
<script src="{{ asset('theme/default/js/vendor.min.js') }}"></script>
<script src="{{ asset('theme/default/js/app.min.js') }}"></script>

</body>
</html>