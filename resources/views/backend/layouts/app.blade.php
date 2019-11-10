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

<body>
<div id="wrapper">
    @include('backend.includes.header')
    @include('backend.includes.sidebar')
    @include('includes.partials.messages')

    <div class="content-page">

        <div class="content">

            <div class="container-fluid">
                @if(isset($links))
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        @foreach($links as $a => $link)
                                            <li class="breadcrumb-item active"><a href="{{ $link }}">{{ $a }}</a></li>
                                        @endforeach
                                    </ol>
                                </div>
                                <h4 class="page-title">{{ array_key_last($links) }}</h4>
                            </div>
                        </div>
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
        @include('backend.includes.footer')
    </div>
</div>

<script src="{{ asset('theme/default/js/vendor.min.js') }}"></script>
<script src="{{ asset('theme/default/libs/morris-js/morris.min.js') }}"></script>
<script src="{{ asset('theme/default/libs/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('theme/default/js/pages/crm-dashboard.init.js') }}"></script>
<script src="{{ asset('theme/default/js/app.min.js') }}"></script>
</body>

</html>