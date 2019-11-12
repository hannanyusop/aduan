<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('homepage/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('homepage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('homepage/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('homepage/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('homepage/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/style.css') }}">
</head>
<body>
<div class="bg-top navbar-light" style="background-color: #797979">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center py-4">
                <img class="navbar-brand" src="{{ asset('img/maiwp/logo.png') }}">
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg" style="background-color: #CD2122">
    <div class="container d-flex align-items-center">
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item text-white"><a href="https://www.maiwp.gov.my/i/index.php/en/" class="nav-link pl-0 text-white">Utama</a> </li>
                <li class="nav-item text-white"><a href="{{ route('frontend.auth.login') }}" class="nav-link pl-0 text-white">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-color: #e4e5e3">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5">
                <div class="py-md-5">
                    <div class="heading-section heading-section-white mb-5">
                        <h2 class="mb-4 text-danger">Aduan</h2>
                    </div>

                    @include('includes.partials.messages')
                    {{ html()->form('POST', route('frontend.contact.send'))->class('appointment-form ftco-animate')->open() }}
                        <div class="d-md-flex">
                            <div class="form-group">
                                {{ html()->email('email')->class('form-control')->placeholder('E-mel') }}
                            </div>
                            <div class="form-group ml-md-4">
                                {{ html()->text('phone')->class('form-control')->placeholder('Telefon') }}
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                {{ html()->text('subject')->class('form-control')->placeholder('Tajuk')->required() }}
                            </div>
                        </div>

                        @if(config('access.captcha.contact'))
                            <div class="row">
                                <div class="col">
                                    @captcha
                                    {{ html()->hidden('captcha_status', 'true') }}
                                </div><!--col-->
                            </div><!--row-->
                        @endif
                        <div class="d-md-flex">
                            <div class="form-group">
                                {{ html()->textarea('message')->class('form-control')->placeholder('Aduan')->attribute('rows', 3)->required() }}
                            </div>
                        </div>

                        <div class="d-md-flex">
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Hantar" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Majlis Agama Islam Wilayah Persekutuan<br>Financial Park, 87000 Labuan, Labuan Federal Territory</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2"><br></h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">087-418 515</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Hakcipta © 2017 Majlis Agama Islam Wilayah Persekutuan. Disediakan oleh Bahagian Teknologi Maklumat.
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('homepage/js/jquery.min.js') }}"></script>
<script src="{{ asset('homepage/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{ asset('homepage/js/popper.min.js') }}"></script>
<script src="{{ asset('homepage/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('homepage/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('homepage/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('homepage/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('homepage/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('homepage/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('homepage/js/aos.js') }}"></script>
<script src="{{ asset('homepage/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('homepage/js/scrollax.min.js') }}"></script>
<script src="{{ asset('homepage/js/main.js') }}"></script>

</body>
</html>