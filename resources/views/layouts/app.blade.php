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
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/custom.css') }}">
     <script src="{{ url('/js/jquery-1.12.4.min.js')}}"></script>
    <script src=" {{ url('js/min/vendor/modernizr.js')  }}"></script>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    
    
</head>
<body>
    <header class="phoinikas--body-header-global">
      <div class="phoinikas--header-mobile">
        <div class="phoinikas--wrapper">
          <h1 class="phoinikas--header-logo">
            <a href="{{ url('/') }}">Sizzler</a>
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
            <li><a href="{{ url('menu') }}" class="phoinikas--menu-1">Menu</a></li>
            <li><a href="{{ url('promotion') }}">Promotion</a></li>
            <li><a href="{{ url('location') }}">Location</a></li>
            <li><a href="member.html">Sizzler Member</a></li>
            <li><a href="{{ url('healthtip') }}">Health Tips</a></li>
            <li><a href="{{ url('media') }}">Media</a></li>
          </ul>
          <ul class="phoinikas--mobile-nav-sub">
            <li>
              <a href="{{ url('about') }}">About Sizzler</a>
            </li>
            <li>
              <a href="{{ url('career') }}">Career</a>
            </li>
            <li>
              <a href="{{ url('contact') }}">Contact Us</a>
            </li>
            <li>
              <a href="{{ url('international') }}">International</a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="phoinikas--header-tablet">
        <div class="phoinikas--wrapper">
          <section class="phoinikas--header-row-1">
            <a href="{{ url('/') }}" style="margin-right:10px;padding-top:2px;"><img src="{{ asset('img/global/header/icon-home.png')}}" alt="" style="padding-top: 3px; padding-right: 9px;"></a>
            <nav role="language" class="phoinikas--row-checkbox phoinikas--nav-language">
              <input type="radio" name="language" id="language-thai"  @if (App::getLocale()=='th') checked @endif ><label for="language-thai" class="phoinikas--label-radio" style="font-size: 1em;">Thai</label>
              <input type="radio" name="language" id="language-eng"  @if (App::getLocale()=='en') checked @endif ><label for="language-eng" class="phoinikas--label-radio" style="font-size: 1em;">Eng</label>
            </nav>

            <div class="phoinikas--nav-bar">
              <a href="{{ url('story') }}">{{ trans('home.story') }}</a>  
              <a href="{{ url('about') }}">{{ trans('home.about') }}</a>
              <a href="{{ url('career') }}">{{ trans('home.career') }}</a>
              <a href="{{ url('contact') }}">{{ trans('home.contact') }}</a>
              <a href="#" id="international-link">{{ trans('home.international') }}
                <div id="div-international-link">
                  <span onclick="JavaScript:window.open('http://www.sizzler.com.au/')">Australia</span> |
                  <span onclick="JavaScript:window.open('http://www.sizzler.com/')">USA</span> |
                  <span onclick="JavaScript:window.open('http://www.sizzler.com.cn/')">China</span> |
                  <span onclick="JavaScript:window.open('http://www.sizzler.jp/')">Japan</span>
                </div>
              </a>

              <a href="https://www.facebook.com/SizzlerThai/" target="_blank">
                <img src="{{ asset('img/global/header/icon-fb.png')}}" alt=""></a>
              <a href="https://www.youtube.com/channel/UClsXxgLIRIG1mYhP5MKIOkw" target="_blank">
                <img src="{{ asset('img/global/header/icon-youtube.png')}}" alt=""></a>
              <a href="member.html" class="phoinikas--link-member">
                <img src="{{ asset('img/global/header/icon-member.png')}}" alt=""></a>
            </div>
          </section>

          <section class="phoinikas--header-row-2">
            <h1 class="phoinikas--header-logo"><a href="{{ url('/') }}">Sizzler</a></h1>
            <nav role="navigation" class="phoinikas--nav-main-global">
              <ul class="phoinikas--main-global-list">
                <li><a href="{{ url('menu') }}" class="phoinikas--menu-1">{{ trans('home.menu') }}</a></li>
                <li><a href="{{ url('promotion') }}">{{ trans('home.promotion') }}</a></li>
                <li><a href="{{ url('location') }}">{{ trans('home.location') }}</a></li>
                <li><a href="member.html">{{ trans('home.member') }}</a></li>
                <li><a href="{{ url('healthtip') }}">{{ trans('home.healthtip') }}</a></li>
                <li><a href="{{ url('media') }}">{{ trans('home.media') }}</a></li>
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
            <li><a href="{{ url('beef') }}">Beef</a></li>
            <li><a href="{{ url('pork') }}">Pork</a></li>
            <li><a href="{{ url('seafood') }}">Seafood</a></li>
            <li><a href="{{ url('chicken') }}">Chicken</a></li>
            <li><a href="{{ url('burger') }}">Burgers</a></li>
            <li><a href="{{ url('kidmenu') }}">Kids Menu</a></li>
          </ul>

          <dl class="phoinikas--row-2">
            <dt><a href="{{ url('combination') }}">Combination</a></dt>
            <dd>
              <ul>
                <li><a href="{{ url('com-beef') }}">- With Beef</a></li>
                <li><a href="{{ url('com-suprem') }}">- Supreme</a></li>
                <li><a href="{{ url('com-platter') }}">- Platter</a></li>
              </ul>
            </dd>
          </dl>

          <div class="phoinikas--row-3 phoinikas--banner_type-1">
            <a href="{{ url('wednesday') }}"><img src="{{asset('img/global/subnav/banner-subnav-1.png')}}" alt="Wednesday Night Special"></a>
            <a href="{{ url('everyday') }}"><img src="{{asset('img/global/subnav/banner-subnav-2.png')}}" alt="Everyday Great Value"></a>
            <a href="{{ url('lunch') }}"><img src="{{asset('img/global/subnav/banner-subnav-3.png')}}" alt="Lunch Special"></a>
            <a href="javascript:void(0);" class="phoinikas--row-4 phoinikas--banner_type-2"><img src="{{ asset('img/global/subnav/banner-sizzler_bar.png')}}" alt="ฟรี Sizzler Bar ไม่อั้น 60+ กว่าชนิด"></a>
          </div>

        </nav>
      </div>

    </header>

     @yield('content')
    
    <footer class="phoinikas--body-footer">
    <div class="phoinikas--wrapper">
      <section>
        <div>
          <a href="{{ url('/') }}">
            <img src="{{ asset('img/global/logo-sizzler-footer_2x.png')}}" alt="Sizzler Logo">
          </a>
        </div>

        <ul class="phoinikas--footer-social">
          <li class="phoinikas--social-icon phoinikas--social-fb">
            <a href="https://www.facebook.com/SizzlerThai/" target="_blank">facebook</a>
          </li>
          <li class="phoinikas--social-icon phoinikas--social-email">
            <a href="{{ url('contact') }}" target="_blank">email</a>
          </li>
        </ul>
      </section>
      <section>
        <p>
          &copy; 2017 THE MINOR FOOD GROUP PUBLIC COMPANY LIMITED. ALL RIGHT RESERVED. <br>
          <a href="{{ url('policy') }}" class="phoinikas--btn-policy"> {{ trans('home.policy')  }} </a>
        </p>

      </section>
    </div>
  </footer>

    <!-- <script src="{{ asset('/js/vendor/jquery.min.js')}}"></script> -->
   
   
    <script src="{{ url('/js/vendor/jquery.debouncedresize.js') }}"></script>
    <script src="{{ url('/bower_components/matchHeight/dist/jquery.matchHeight.js') }}"></script>
    <script src="{{ url('/bower_components/jquery.customSelect/jquery.customSelect.js') }}"></script>
    <script src="{{ url('/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('/bower_components/swiper/dist/js/swiper.jquery.min.js') }}"></script>
    <script src="{{ url('/js/main.js') }}"></script>
    <!--[if lt IE 9]><script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.0.8/es5-shim.min.js"></script><![endif]-->
    <!--[if lte IE8]>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <![endif]-->
    <script type="text/javascript">
   
    $(function() {
      @if (App::getLocale()=='th') 
         $('.layout-en').hide();
      @else 
         $('.layout-th').hide();
      @endif
      $('#language-thai').on('click',function(e){
         set_languege('th');
      })
      $("#language-eng").on('click',function(){
          set_languege('en');
      }); 

      function set_languege(languege){
        window.top.location.href= ' {{ url("lang") }}'+'/'+languege ;
        // $.ajax({
        //     url: ' {{ url("language") }}'+'/'+languege ,
        //     type: 'GET',
        //     dataType: 'JSON',
        //   })
        //   .done(function(html) {
        //     if (html.result){
        //       var ele = '.layout-'+html.data.language ;
        //       $('.layout-th,.layout-en').hide();
        //       $(ele).show();
        //     }
        //   })
        //   .fail(function() {
        //     console.log("error");
        //   })
      }

    });

  </script>

</body>

