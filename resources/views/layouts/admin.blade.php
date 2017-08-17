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
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/admin.css') }}">
    <link rel="stylesheet" href="{{ url('css/timeline.css') }}">
    <link rel="stylesheet" href="{{ url('css/custom_new.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/main.css') }}"> -->
    
 
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
   <ul class="nav navbar-nav navbar-right">
                       
                        @if (Auth::guest() )
                            <li><a href="{{ route('login') }}">Login</a></li>
                            @if ( Route::currentRouteName() != "admin.login" )
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                        @else

                           {{--  <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name.' '.Auth::user()->lastname }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li> --}}
                        @endif
                    </ul>

@yield('body')

<script src="{{ asset('plugin/bootstrap/bootstrap.min.js') }}"></script>
<!-- <script src="{{ asset("js/app.js") }}"></script> -->
<!-- <script src="{{ asset("js/Chart.js") }}"></script> -->
<script src="{{ asset('js/admin.js') }}"></script>
</body>
