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
            <div class="col-xl-10">
                <div class="card bg-pattern">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="{{ asset('img/maiwp/icon.png') }}" alt="" height="50"></span>
                            </a>
                            <h3 class="mb-4 mt-3">Sistem Aduan Baitulmal MAIWP</h3>
                        </div>

                        {{ html()->form('POST', route('frontend.aduan.insert'))->open() }}

                        @include('includes.partials.messages')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name">Nama</label>
                                    {{ html()->text('name')->class('form-control') }}
                                    @error('name')
                                        <p class="text-danger">*{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="ic_no">Nombor MyKAD</label>
                                    {{ html()->text('ic_no')->class('form-control') }}
                                    @error('ic_no')
                                    <p class="text-danger">*{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">E-mail</label>
                                    {{ html()->text('email')->class('form-control') }}
                                    @error('email')
                                    <p class="text-danger">*{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="phone">No. Tel Bimbit</label>
                                    {{ html()->text('phone')->class('form-control') }}
                                    @error('phone')
                                    <p class="text-danger">*{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="race">Kaum</label>
                                    {{ html()->select('race', ['' => '-- Sila Pilih --']+$races)->class('form-control') }}
                                    @error('race')
                                    <p class="text-danger">*{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="nation">Warganegara</label>
                                    {{ html()->select('nation', ['' => '-- Sila Pilih --']+$nationals)->class('form-control') }}
                                    @error('nation')<p class="text-danger">*{{ $message }}</p>@enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="address">Alamat</label>
                                    {{ html()->textarea('address')->attribute('rows', 5)->class('form-control') }}
                                    @error('address')<p class="text-danger">*{{ $message }}</p>@enderror
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="subject">Tajuk Aduan</label>
                                    {{ html()->text('subject')->class('form-control') }}
                                    @error('subject')<p class="text-danger">*{{ $message }}</p>@enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="message">Keterangan Aduan</label>
                                    {{ html()->textarea('message')->attribute('rows', 15)->class('form-control') }}
                                    @error('message')<p class="text-danger">*{{ $message }}</p>@enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <p>
                                Segala maklumat diri dan maklumat aduan yang dikemukakan oleh saya adalah benar dan saya bertanggungjawab ke atasnya.
                                Jika Pihak Baitulmal mendapati aduan saya adalah palsu, Pihak Baitulmal berhak membuat laporan polis terhadap saya
                                dan aduan saya.
                            </p>
                        </div>

                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                {{ html()->checkbox('agree',true, 1)->class('custom-control-input') }}
                                <label class="custom-control-label" for="checkbox-signin">Saya telah membaca dan setuju dengan perkara yang ditetapkan</label>
                                @error('agree')<p class="text-danger">*{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-danger btn-lg mb-2" type="submit">Hantar Aduan</button>
                        </div>

                        {{ html()->form()->close() }}
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-danger"><a href="{{ route('frontend.index') }}" class="text-danger ml-1"><b>Balik ke laman utama</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer footer-alt">
    2015 - 2019 &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a>
</footer>
<script src="{{ asset('theme/default/js/vendor.min.js') }}"></script>
<script src="{{ asset('theme/default/js/app.min.js') }}"></script>

</body>
</html>