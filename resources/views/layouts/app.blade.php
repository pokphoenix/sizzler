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
            <a href="{{ url('/') }}"><img src="{{ url('/img/global/logo-sizzler-footer.png') }}" ></a>
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
            <nav role="language" class="phoinikas--row-checkbox phoinikas--nav-language">
              <input type="radio" name="language" id="language-thai"><label for="language-thai" class="phoinikas--label-radio">Thai</label>
              <input type="radio" name="language" id="language-eng" checked><label for="language-eng" class="phoinikas--label-radio">Eng</label>
            </nav>
    
            <div class="phoinikas--nav-bar">
              <a href="{{ url('about') }}">About Sizzler</a>
              <a href="{{ url('career') }}">Career</a>
              <a href="{{ url('contact') }}">Contact Us</a>
              <a href="{{ url('international') }}">International</a>
    
              <a href="#" target="_blank">
                <img src="{{ url('/img/global/header/icon-fb.png') }}" alt=""></a>
              <a href="" target="_blank">
                <img src="{{ url('/img/global/header/icon-youtube.png') }}" alt=""></a>
              <a href="" target="_blank">
                <img src="{{ url('/img/global/header/icon-line.png') }}" alt=""></a>
              <a href="member.html" class="phoinikas--link-member">
                <img src="{{ url('/img/global/header/icon-member.png') }}" alt=""></a>
            </div>
          </section>
    
          <section class="phoinikas--header-row-2">
            <h1 class="phoinikas--header-logo"><a href="{{ url('/') }}">Sizzler</a></h1>
            <nav role="navigation" class="phoinikas--nav-main-global">
              <ul class="phoinikas--main-global-list">
                <li><a href="{{ url('menu') }}" class="phoinikas--menu-1">Menu</a></li>
                <li><a href="{{ url('promotion') }}">Promotion</a></li>
                <li><a href="{{ url('location') }}">Location</a></li>
                <li><a href="member.html">Sizzler Member</a></li>
                <li><a href="{{ url('healthtip') }}">Health Tips</a></li>
                <li><a href="{{ url('media') }}">Media</a></li>
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
            <a href="menu-wednesday.html"><img src="{{ url('/img/global/subnav/banner-subnav-1.png') }}" alt="Wednesday Night Special"></a>
            <a href="menu-everyday.html"><img src="{{ url('/img/global/subnav/banner-subnav-2.png') }}" alt="Everyday Great Value"></a>
            <a href="menu-lunch.html"><img src="{{ url('/img/global/subnav/banner-subnav-3.png') }}" alt="Lunch Special"></a>
          </div>
          <a href="javascript:void(0);" class="phoinikas--row-4 phoinikas--banner_type-2"><img src="{{ url('/img/global/subnav/banner-sizzler_bar.jpg') }}" alt="ฟรี Sizzler Bar ไม่อั้น 60+ กว่าชนิด"></a>
        </nav>
      </div>
    </header>

     @yield('content')

    <!-- <footer class="phoinikas--body-footer">
    <div class="phoinikas--wrapper">
      <section>
        <div>
          <a href="{{ url('/') }}">
            <img src="{{ asset('img/global/logo-sizzler-footer_2x.png')}} " alt="Sizzler Logo">
          </a>
        </div>

        <ul class="phoinikas--footer-social">
          <li class="phoinikas--social-icon phoinikas--social-fb">
            <a href="https://www.facebook.com/SizzlerThai/" target="_blank">facebook</a>
          </li>
          <li class="phoinikas--social-icon phoinikas--social-email">
            <a href="{{ url('contact') }} " target="_blank">email</a>
          </li>
        </ul>
      </section>
      <section>
        <p>
          &copy; 2017 THE MINOR FOOD GROUP PUBLIC COMPANY LIMITED. ALL RIGHT RESERVED. <br>
          <a href="privacy_policy.html" class="phoinikas--btn-policy">นโยบายข้อมูลส่วนตัว</a>
        </p>

      </section>
    </div>
  </footer> -->
    <footer class="phoinikas--body-footer">
    <div class="phoinikas--wrapper">
      <section>
        <div>
          <a href="index.html">
            <img src="{{ asset('img/global/logo-sizzler-footer_2x.png')}} " alt="Sizzler Logo">
          </a>
        </div>

        <ul class="phoinikas--footer-social">
          <li class="phoinikas--social-icon phoinikas--social-fb">
            <a href="https://www.facebook.com/SizzlerThai/" target="_blank">facebook</a>
          </li>
          <li class="phoinikas--social-icon phoinikas--social-email">
            <a href="contact.html" target="_blank">email</a>
          </li>
        </ul>
      </section>
      <section>
        <p>
          &copy; 2017 THE MINOR FOOD GROUP PUBLIC COMPANY LIMITED. ALL RIGHT RESERVED. <br>
          <a href="privacy_policy.html" class="phoinikas--btn-policy">นโยบายข้อมูลส่วนตัว</a>
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
    <script type="text/javascript">
  
    $(function() {
      $('.layout-en').hide();
      $('#language-thai').on('click',function(e){
        set_languege('th');
    })
       $("#language-eng").on('click',function(){
            set_languege('en');
      }); 

      function set_languege(languege){
        $.ajax({
            url: ' {{ url("language") }}'+'/'+languege ,
            type: 'GET',
            dataType: 'JSON',
          })
          .done(function(html) {
            if (html.result){
              var ele = '.layout-'+html.data.language ;
              $('.layout-th,.layout-en').hide();
              $(ele).show();
            }
          })
          .fail(function() {
            console.log("error");
          })
      }

    });

  </script>

</body>

