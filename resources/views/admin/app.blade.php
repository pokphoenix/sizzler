<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sizzler') }}</title>

    <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/timeline.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/main.css') }}"> -->
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
 
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

               
            </div>
        </nav>

        @yield('content')
    </div>



<script src="{{ asset('plugin/bootstrap/bootstrap.min.js') }}"></script>
<!-- <script src="{{ asset("js/app.js") }}"></script> -->
<!-- <script src="{{ asset("js/Chart.js") }}"></script> -->
<!-- <script src="{{ asset("js/admin.js") }}"></script> -->
 <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
