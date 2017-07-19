@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom-backend.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/fancybox/jquery.fancybox.min.css') }}">
<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('/admin') }}"><img  style="height:100%;" src="{{ asset('/img/global/logo-sizzler-footer.png') }}" alt="Sizzler Logo"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  {{ Auth::user()->name.' '.Auth::user()->lastname }} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
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
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bars fa-fw"></i> Ourmenu<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*category') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/category') }}">หมวดหมู่เมนู</a>
                                </li>
                               <!--   <li {{ (Request::is('*menu') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/menu') }}">เมนูอาหาร</a>
                                </li> -->
                                <li {{ (Request::is('*beef') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/beef') }}">beef (เนื้อ)</a>
                                </li>
                                <li {{ (Request::is('*pork') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/pork') }}">pork (หมู)</a>
                                </li>
                                <li {{ (Request::is('*seafood') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/seafood') }}">seafood (อาหารทะเล)</a>
                                </li>
                                <li {{ (Request::is('*chicken') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/chicken') }}">chicken (ไก่)</a>
                                </li>
                                <li {{ (Request::is('*menu') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/burger') }}">burger (เบอเกอร์)</a>
                                </li>
                                <li {{ (Request::is('*menu') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/kid') }}">kid-menu (เมนูสำหรับเด็ก)</a>
                                </li>
                                <li {{ (Request::is('*menu') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/com-beef') }}">com-beef (เมนูผสมเนื้อ)</a>
                                </li>
                                <li {{ (Request::is('*menu') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/com-suprem') }}">com-suprem (เมนูผสม)</a>
                                </li>
                                <li {{ (Request::is('*menu') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/com-platter') }}">com-platter (เมนูจานใหญ่)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-money fa-fw"></i> Promotion<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*promotion') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/promotion') }}">โปรโมชั่น</a>
                                </li>
                                <li {{ (Request::is('*promotion-slider') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/promotion-slider') }}">โปรโมชั่น สไลด์เดอร์</a>
                                </li>
                                <li {{ (Request::is('*promotion-slider-sub') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/promotion-slider-sub') }}">โปรโมชั่น สไลด์เดอร์ (บล็อคล่าง)</a>
                                </li>
                                <li {{ (Request::is('*promotion-banner') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/promotion-banner') }}">โปรโมชั่น แบนเนอร์</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#">
                                <i class="fa fa-money fa-fw"></i> Home<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*slider') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/slider') }}">Slider Main</a>
                                </li>
                                <li {{ (Request::is('*slider-sub') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/slider-sub') }}">Slider Sub</a>
                                </li>
                           
                                <li {{ (Request::is('*banner') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/banner') }}">banner</a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('*location') ? 'class="active"' : '') }}>
                            <a href="{{ url ('admin/location') }}"><i class="fa fa-map-o fa-fw"></i> Location</a>
                        </li>
                         <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('admin/healthtip') }}"><i class="fa fa-dashboard fa-fw"></i> Health Tip</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-caret-square-o-right fa-fw"></i> Media<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*ads') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/media-category') }}">หมวดหมู่ มีเดีย</a>
                                </li>
                                <li {{ (Request::is('*media') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/media') }}">มีเดีย</a>
                                </li>
                                <li {{ (Request::is('*release') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/release') }}">release</a>
                                </li>
                                <!-- <li {{ (Request::is('*ads') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('ads') }}">print ads</a>
                                </li>
                                <li {{ (Request::is('*tvc') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('tvc') }}">tvc</a>
                                </li>
                                <li {{ (Request::is('*video') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('video') }}">video clip</a>
                                </li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">@yield('page_heading')</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                @yield('section')
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>

<script src="{{ asset('plugin/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('plugin/jquery-validation/jquery.validate.min.js') }}"></script>
@endsection
