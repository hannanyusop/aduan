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

<body class="authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-pattern">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="{{ asset('img/maiwp/icon.png') }}" alt="" height="50"></span>
                            </a>
                            <h3 class="mb-4 mt-3">Sistem Aduan Baitulmal MAIWP</h3>
                        </div>

                        {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}

                            <div class="form-group mb-3">
                                <label for="emailaddress">E-mel</label>
                                {{ html()->email('email')->class('form-control') }}
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Kata laluan</label>
                                {{ html()->password('password')->class('form-control') }}
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    {{ html()->checkbox('remember', true, 1)->class('custom-control-input') }}
                                    <label class="custom-control-label" for="checkbox-signin">Ingati Saya</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-danger btn-block mb-2" type="submit"> Log Masuk </button>
                                <span class="font-weight-bold">Terlupa kata laluan? <a href="pages-recoverpw.html" class="text-danger mt-2">Reset</a></span>

                            </div>

                        {{ html()->form()->close() }}
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-danger"><a href="pages-register.html" class="text-danger ml-1"><b>Balik ke laman utama</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer footer-alt">
    2015 - 2019 &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a>
</footer>
<script src="{{ asset('theme/defaultjs/vendor.min.js') }}"></script>
<script src="{{ asset('theme/default/js/app.min.js') }}"></script>

</body>
</html>