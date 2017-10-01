@extends('admin.app')

@section('content')

<style type="text/css">
.login-card {
    min-height: 75vh;
    background-image: url( {{ asset('img/tips/bg-header.jpg')}}  );
    background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -wenkit-background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.12), 0 1px 6px 0 rgba(0, 0, 0, 0.12);
    z-index: 2;
    padding: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-family: roboto!important;
}
.login-card:after {
    background: linear-gradient(-135deg, rgb(5, 53, 29), rgb(10,71,40));
    background: -webkit-linear-gradient(-135deg, rgb(5, 53, 29), rgb(10,71,40));
    /* Login Card Arkaplan Rengi */
    
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    content: "";
    opacity: 0.8;
    z-index: 3;
}
.login-card > form {
    z-index: 4;
    position: relative;
    padding: 0px 25px;
    width: 100%;
}
.logo-center {
    text-align: center;
    position: relative;
    opacity: 0.8;
}
.logo {
    height: auto;
    padding: 50px 0px;
}
/* form başlangıç stiller ------------------------------- */

.group {
    position: relative;
    margin-bottom: 45px;
}
.group input {
    font-size: 18px;
    padding: 10px 10px 10px 10px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    background: none;
    color: #eee;
}
.group input:focus {
    outline: none;
}
/* LABEL ======================================= */

.group label {
    color: rgba(255, 255, 255, 0.5);
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 5px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}
/* active durum */

.group input:focus ~ label,
input:valid ~ label {
    top: -20px;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.7);
}
/* BOTTOM BARS ================================= */

.bar {
    position: relative;
    display: block;
    width: 100%;
}
.bar:before,
.bar:after {
    content: '';
    height: 2px;
    width: 0;
    bottom: 1px;
    position: absolute;
    background: rgba(255, 255, 255, 0.7);
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}
.bar:before {
    left: 50%;
}
.bar:after {
    right: 50%;
}
/* active durum bar */

.group input:focus ~ .bar:before,
.group input:focus ~ .bar:after {
    width: 50%;
}
/* HIGHLIGHTER ================================== */

.highlight {
    position: absolute;
    height: 0%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5;
}
/* active durum */

.group input:focus ~ .highlight {
    -webkit-animation: inputHighlighter 0.3s ease;
    -moz-animation: inputHighlighter 0.3s ease;
    animation: inputHighlighter 0.3s ease;
}
/* form animasyon ================ */

@-webkit-keyframes inputHighlighter {
    from {
        background: rgba(255, 255, 255, 0.7);
    }
    to {
        width: 0;
        background: transparent;
    }
}
@-moz-keyframes inputHighlighter {
    from {
        background: rgba(255, 255, 255, 0.7);
    }
    to {
        width: 0;
        background: transparent;
    }
}
@keyframes inputHighlighter {
    from {
        background: rgba(255, 255, 255, 0.7);
    }
    to {
        width: 0;
        background: transparent;
    }
}
.input-ikon {
    font-size: 25px!important;
    position: relative;
}
.input-sifre-ikon {
     font-size: 22px!important;
    position: relative;
}
.span-input {
    margin-left: 10px;
    position: relative;
    top: -5px;
}
.giris-yap-buton{
    background: linear-gradient(-135deg, rgb(194,26,38), rgb(209,217,212));
    background: -webkit-linear-gradient(-135deg, rgb(194,26,38), rgb(209,217,212));
    display: block;
    text-align: center;
    text-decoration: none;
    color: #eee;
    font-family: roboto;
    font-weight: 100;
    padding: 10px;
    border-radius: 3px;
    outline: none;
    opacity: 0.8;
}
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
    transition: background-color 5000s ease-in-out 0s;
    -webkit-text-fill-color: #fff !important;
}
.help-block  {
     color: rgba(194,26,38,0.9);
}
.giris-yap-buton:hover{
    text-decoration: none;
    color:rgba(10,71,40,0.8);
}

/* Ripples container */

.ripples {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background: transparent;
}


/* Ripples circle */

.ripplesCircle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  width: 0;
  height: 0;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.25);
}

.ripples.is-active .ripplesCircle {
  animation: ripples .4s ease-in;
}


/* Ripples animation */

@keyframes ripples {
  0% { opacity: 0; }

  25% { opacity: 1; }

  100% {
    width: 200%;
    padding-bottom: 200%;
    opacity: 0;
  }
}

/* Button */

.button {
  position: relative;
  display: inline-block;
  padding: 12px 24px;
  margin: .3em 0 1em 0;
  width: 100%;
  vertical-align: middle;
  color: #fff;
  font-size: 16px;
  line-height: 20px;
  -webkit-font-smoothing: antialiased;
  text-align: center;
  letter-spacing: 1px;
  background: transparent;
  border: 0;
  /*border-bottom: 2px solid #3160B6;*/
  cursor: pointer;
  transition: all 0.15s ease;
}
.button:focus { outline: 0; }


/* Button modifiers */

.buttonBlue {
 /* background: #4a89dc;
  text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);*/
     background: linear-gradient(-135deg, rgb(194,26,38), rgb(209,217,212));
    background: -webkit-linear-gradient(-135deg, rgb(194,26,38), rgb(209,217,212));
     opacity: 0.8;
      border-radius: 3px;
}

.buttonBlue:hover {
    background: linear-gradient(-135deg, rgb(194,26,38), rgb(5, 53, 29));
    background: -webkit-linear-gradient(-135deg, rgb(194,26,38), rgb(5, 53, 29));
/* background: #357bd8;*/ 
}


</style>




<div class="container">
    <div class="row">
        
        <div class="col-lg-offset-4  col-lg-4 col-md-offset-2  col-md-8 col-sm-offset-3 col-sm-6   col-xs-12     login-card">


            <form id="login-form" class="col-lg-12" method="POST" action="{{ route('admin.login') }}" >
                  {{ csrf_field() }}
                <!-- Logo -->
                <div class="col-lg-12 logo-center">
                    <img width="100" class="logo" src="{{ asset('/img/global/logo-sizzler-footer.png') }}" alt="Logo" />
                </div>
              

                <div style="clear:both;"></div>
                 <div class="group">
                     <input  id="email" type="text" name="email" value="{{ old('email') }}" required >

                  
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="input-sifre-ikon fa fa-user"></i><span class="span-input">Email</span></label>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

               
                <div class="group">
                     <input id="password" type="password" name="password" required>

                
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="input-sifre-ikon fa fa-unlock-alt"></i><span class="span-input">Password</span></label>

                      @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
              

               
            
              

                <button type="submit" class="button buttonBlue">Login
                    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                </button>

            </form>
      

           

         

        </div>


    </div>
</div>
<script type="text/javascript">
     var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    $(this).removeClass('is-active');
  });
</script>
@endsection
