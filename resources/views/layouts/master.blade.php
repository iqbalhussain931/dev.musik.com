<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="app">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('js/jPlayer/jplayer.flat.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />

    <!--[if lt IE 9]
    <script src="{{ asset('js/ie/html5shiv.js') }}"></script>
    <script src="{{ asset('js/ie/respond.min.js') }}"></script>
    <script src="{{ asset('js/ie/excanvas.js') }}"></script>
    [endif]-->

    <!-- Polyfills -->
    <script src="{{ asset('Ng/core-js/client/shim.min.js') }}"></script>
    <script src="{{ asset('Ng/zone.js/dist/zone.js') }}"></script>
    <script src="{{ asset('Ng/systemjs/dist/system.src.js') }}"></script>
    <script src="{{ asset('config/app.config.js') }}"></script>
    <script>
        System.import('/main.app.js').catch(function(err){ console.error(err); });
    </script>
</head>
<body class="@yield('bodyClass')">
@yield('content')

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- App -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/app.plugin.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jPlayer/jquery.jplayer.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jPlayer/add-on/jplayer.playlist.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jPlayer/demo.js') }}"></script>
</body>
</html>
