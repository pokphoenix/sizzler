<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
     <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <link href="https://fonts.googleapis.com/css?family=Kanit:400,400i,600,600i|Trirong:300,400,500,600&amp;subset=latin-ext,thai" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <script src=" {{ asset('js/min/vendor/modernizr.js')  }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
   
</head>
<body>
    <header class="phoinikas--body-header-global">
      <div class="phoinikas--header-mobile">
        <div class="phoinikas--wrapper">
          <h1 class="phoinikas--header-logo">
            <a href="{{ asset('/') }}"><img src="{{ asset('/img/global/logo-sizzler-footer.png') }}" ></a>
          </h1>
    
          <nav role="language" class="phoinikas--mobile-nav-language">
            <a href="#">TH</a> &nbsp;|&nbsp; <a href="#">EN</a>
          </nav>
    
          <div class="phoinikas--hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div> <!-- .phoinikas--hamburger-menu -->
        </div>
    
        <nav role="navigation" class="phoinikas--mobile-nav-main">
          <ul class="phoinikas--mobile-nav-sub">
            <li><a href="{{ asset('menu') }}" class="phoinikas--menu-1">Menu</a></li>
            <li><a href="{{ asset('promotion') }}">Promotion</a></li>
            <li><a href="{{ asset('location') }}">Location</a></li>
            <li><a href="member.html">Sizzler Member</a></li>
            <li><a href="{{ asset('healthtip') }}">Health Tips</a></li>
            <li><a href="{{ asset('media') }}">Media</a></li>
          </ul>
          <ul class="phoinikas--mobile-nav-sub">
            <li>
              <a href="{{ asset('about') }}">About Sizzler</a>
            </li>
            <li>
              <a href="{{ asset('career') }}">Career</a>
            </li>
            <li>
              <a href="{{ asset('contact') }}">Contact Us</a>
            </li>
            <li>
              <a href="{{ asset('international') }}">International</a>
            </li>
          </ul>
        </nav>
      </div>
    
      <div class="phoinikas--header-tablet">
        <div class="phoinikas--wrapper">
          <section class="phoinikas--header-row-1">
            <nav role="language" class="phoinikas--row-checkbox phoinikas--nav-language">
              <input type="radio" name="language" id="language-thai"><label for="language-thai" class="phoinikas--label-radio">Thai</label>
              <input type="radio" name="language" id="language-eng" checked><label for="language-eng" class="phoinikas--label-radio">Eng</label>
            </nav>
    
            <div class="phoinikas--nav-bar">
              <a href="{{ asset('about') }}">About Sizzler</a>
              <a href="{{ asset('career') }}">Career</a>
              <a href="{{ asset('contact') }}">Contact Us</a>
              <a href="{{ asset('international') }}">International</a>
    
              <a href="#" target="_blank">
                <img src="{{ asset('/img/global/header/icon-fb.png') }}" alt=""></a>
              <a href="" target="_blank">
                <img src="{{ asset('/img/global/header/icon-youtube.png') }}" alt=""></a>
              <a href="" target="_blank">
                <img src="{{ asset('/img/global/header/icon-line.png') }}" alt=""></a>
              <a href="member.html" class="phoinikas--link-member">
                <img src="{{ asset('/img/global/header/icon-member.png') }}" alt=""></a>
            </div>
          </section>
    
          <section class="phoinikas--header-row-2">
            <h1 class="phoinikas--header-logo"><a href="{{ asset('/') }}">Sizzler</a></h1>
            <nav role="navigation" class="phoinikas--nav-main-global">
              <ul class="phoinikas--main-global-list">
                <li><a href="{{ asset('menu') }}" class="phoinikas--menu-1">Menu</a></li>
                <li><a href="{{ asset('promotion') }}">Promotion</a></li>
                <li><a href="{{ asset('location') }}">Location</a></li>
                <li><a href="member.html">Sizzler Member</a></li>
                <li><a href="{{ asset('healthtip') }}">Health Tips</a></li>
                <li><a href="{{ asset('media') }}">Media</a></li>
              </ul>
            </nav>
          </section>
        </div>
      </div>
    
      <!-- sub navigation for Menu -->
      <div class="phoinikas--subnav-1">
        <header>
          <strong>Menu</strong>
          <i class="fa fa-chevron-left"></i>
          <i class="fa fa-times"></i>
        </header>
        <nav>
          <ul class="phoinikas--row-1">
            <li><a href="{{ asset('beef') }}">Beef</a></li>
            <li><a href="{{ asset('pork') }}">Pork</a></li>
            <li><a href="{{ asset('seafood') }}">Seafood</a></li>
            <li><a href="{{ asset('chicken') }}">Chicken</a></li>
            <li><a href="{{ asset('burger') }}">Burgers</a></li>
            <li><a href="{{ asset('kidmenu') }}">Kids Menu</a></li>
          </ul>

          <dl class="phoinikas--row-2">
            <dt><a href="menu-combination.html">Combination</a></dt>
            <dd>
              <ul>
                <li><a href="{{ asset('com-beef') }}">- With Beef</a></li>
                <li><a href="{{ asset('com-suprem') }}">- Supreme</a></li>
                <li><a href="{{ asset('com-platter') }}">- Platter</a></li>
              </ul>
            </dd>
          </dl>
    
          <div class="phoinikas--row-3 phoinikas--banner_type-1">
            <a href="menu-wednesday.html"><img src="{{ asset('/img/global/subnav/banner-subnav-1.png') }}" alt="Wednesday Night Special"></a>
            <a href="menu-everyday.html"><img src="{{ asset('/img/global/subnav/banner-subnav-2.png') }}" alt="Everyday Great Value"></a>
            <a href="menu-lunch.html"><img src="{{ asset('/img/global/subnav/banner-subnav-3.png') }}" alt="Lunch Special"></a>
          </div>
          <a href="javascript:void(0);" class="phoinikas--row-4 phoinikas--banner_type-2"><img src="{{ asset('/img/global/subnav/banner-sizzler_bar.jpg') }}" alt="ฟรี Sizzler Bar ไม่อั้น 60+ กว่าชนิด"></a>
        </nav>
      </div>
    </header>

     @yield('content')

    <footer class="phoinikas--body-footer">
        <div class="phoinikas--wrapper">
            <section>
                <div>
                    <a href="{{ asset('index') }}">
                        <img src="{{ asset('/img/global/logo-sizzler-footer_2x.png') }}" alt="Sizzler Logo">
                    </a>
                </div>
    
                <ul class="phoinikas--footer-social">
                    <li class="phoinikas--social-icon phoinikas--social-fb">
                        <a href="#" target="_blank">facebook</a>
                    </li>
                    <li class="phoinikas--social-icon phoinikas--social-email">
                        <a href="#" target="_blank">email</a>
                    </li>
                </ul>
            </section>
            <section>
                <p>
                    &copy; 2017 THE MINOR FOOD GROUP PUBLIC COMPANY LIMITED. ALL RIGHT RESERVED. <br>
                    <a href="privacy_policy.html" class="phoinikas--btn-policy">Privacy Policy</a>
                </p>
    
            </section>
        </div>
    </footer>
    

    <!-- <script src="{{ asset('/js/vendor/jquery.min.js')}}"></script> -->
    <script src="{{ asset('js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('/js/vendor/jquery.debouncedresize.js')}}"></script>
    <script src="{{ asset('/bower_components/matchHeight/dist/jquery.matchHeight.js')}}"></script>
    <script src="{{ asset('/bower_components/jquery.customSelect/jquery.customSelect.js')}}"></script>
   <!--  <script src="{{ asset('/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/bower_components/swiper/dist/js/swiper.jquery.min.js')}}"></script> to use -->
    <script src="{{ asset('/js/main.js')}}"></script>
    
    <!--[if lt IE 9]><script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.0.8/es5-shim.min.js"></script><![endif]-->
    <!--[if lte IE8]>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <![endif]-->
    
    <!-- <script src="{{ asset('/js/home.js')}}"></script> -->
</body>




