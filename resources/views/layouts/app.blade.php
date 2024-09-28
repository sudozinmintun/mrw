<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="author" content="Website Design Templates">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>MEDIUM WAY RIVER COMPANY LIMITED @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('data/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/search/search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/quform/css/base.css') }}">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <meta content="MEDIUM WAY RIVER COMPANY LIMITED" name="MEDIUM WAY RIVER COMPANY LIMITED">
    <meta name="keywords" content="MEDIUM WAY RIVER COMPANY LIMITED" />
    <meta property="og:title" content="MEDIUM WAY RIVER COMPANY LIMITED" />
    <meta property="og:image" content="{{ asset('data/logo.png') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="MEDIUM WAY RIVER COMPANY LIMITED" />
</head>

<body>
    <div class="page-wrapper">
        @include('layouts.menu')
        @if (URL::current() == route('welcome'))
            @include('layouts.slider')
        @endif
        @yield('content')
        @include('layouts.footer')

    </div>

    <a href="#!" class="scroll-to-top">
        <i class="fas fa-angle-up" aria-hidden="true"></i>
    </a>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/core.min.js') }}"></script>

    <script src="{{ asset('assets/search/search.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/quform/js/plugins.js') }}"></script>

    <script src="{{ asset('assets/quform/js/scripts.js') }}"></script>
</body>

</html>
