@extends('layouts.app')

@section('content')

<!-- <link rel="stylesheet" href="{{ asset('css/jsslider.css') }}"> -->
<!-- <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script> -->
<!-- <script src="{{ asset('plugin/jssor-slider/jssor.slider-25.0.7.min.js') }}" type="text/javascript"></script> -->
<script type="text/javascript">
// jssor_1_slider_init = function() {

//     var jssor_1_SlideshowTransitions = [
//       {$Duration:1200,$Opacity:2}
//     ];

//     var jssor_1_options = {
//       $AutoPlay: 1,
//       $SlideshowOptions: {
//         $Class: $JssorSlideshowRunner$,
//         $Transitions: jssor_1_SlideshowTransitions,
//         $TransitionsOrder: 1
//       },
//       $ArrowNavigatorOptions: {
//         $Class: $JssorArrowNavigator$
//       },
//       $BulletNavigatorOptions: {
//         $Class: $JssorBulletNavigator$
//       }
//     };

//     var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

//     function ScaleSlider() {
//         var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
//         if (refSize) {
//             refSize = Math.min(refSize, 980);
//             jssor_1_slider.$ScaleWidth(refSize);
//         }
//         else {
//             window.setTimeout(ScaleSlider, 30);
//         }
//     }
//     ScaleSlider();
//     $Jssor$.$AddEvent(window, "load", ScaleSlider);
//     $Jssor$.$AddEvent(window, "resize", ScaleSlider);
//     $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
   
// };
</script>
<!-- <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">

    <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
        @foreach ($sliderMains as $slider)
            <div>
                <img data-u="image" src="{{ asset('storage/upload/'.$slider->thumbnail_th) }}" />
            </div>
        @endforeach
        <a data-u="any" href="https://www.jssor.com" style="display:none">bootstrap slider</a>
    </div>
    
    <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div> -->


<main class="phoinikas--body-main phoinikas--page-home">
        <div class="phoinikas--wrapper phoinikas--wrapper-global">
            <section class="phoinikas--home-banner phoinikas--section-space">
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($sliderMains as $s)
                        <div class="swiper-slide phoinikas--swiper-slide">
                            <a href="{{ asset($s->url)  }}" class="phoinikas--img-link"><img src="{{ asset('storage/upload/'.$s->img_th) }}" alt=""></a>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
            </section>
            <!-- .phoinikas--home-banner -->

            <section class="phoinikas--banner-2 phoinikas--section-space">
                <a href="#" class="phoinikas--img-link">
                    <img src="/img/home/banner-member.jpg" alt="ชวนคุณสมัครสมาชิก รับสิทธิพิเศษมากมาย">
                </a>
            </section>
            <!-- .phoinikas--banner-salad -->

            <section class="phoinikas--home-banner-3">
                <h2 class="phoinikas--home-h2">Health &nbsp;Tips</h2>
                <div class="phoinikas--flex-row">
                    <figure>
                        <a href="health_tips-detail.html">
                            <img src="/img/home/img-tips-1.jpg" alt="">
                        </a>
                        <figcaption>
                            50 อย่าง บำรุงร่างกาย
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="health_tips-detail.html">
                            <img src="/img/home/img-tips-2.jpg" alt="">
                        </a>
                        <figcaption>
                            แอปเปิ้ล ช่วยดูแลสุขภาพ
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="health_tips-detail.html">
                            <img src="/img/home/img-tips-3.jpg" alt="">
                        </a>
                        <figcaption>
                            กินอย่างไรให้สุขภาพดี
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="health_tips-detail.html">
                            <img src="/img/home/img-tips-4.jpg" alt="">
                        </a>
                        <figcaption>
                            ผักสดปลอดโรค
                        </figcaption>
                    </figure>
                </div>
            </section>
            <!-- .phoinikas--banner-salad -->

            <section class="phoinikas--home-foodmenu-slider">
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
    
                        @foreach ($sliderSub as $sub)
                        <div class="swiper-slide">
                            <a href="{{ url('/menu/'.$sub->url) }}" class="phoinikas--img-link">
                                <img src="{{ asset('storage/upload/'.$sub->img_th) }}" alt="">
                            </a>
                        </div>
                        @endforeach


                       <!--  <div class="swiper-slide">
                            <a href="javascript:void(0);" class="phoinikas--img-link">
                            <img src="/img/home/slide-1.jpg" alt="">
                        </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="phoinikas--img-link">
                            <img src="/img/home/slide-2.jpg" alt="">
                        </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="phoinikas--img-link">
                            <img src="/img/home/slide-3.jpg" alt="">
                        </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="phoinikas--img-link">
                            <img src="/img/home/slide-2.jpg" alt="">
                        </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="phoinikas--img-link">
                            <img src="/img/home/slide-3.jpg" alt="">
                        </a>
                        </div> -->
                    </div>

                    <!-- If we need navigation buttons -->
                    <button class="swiper-button-prev phoinikas--button-prev"></button>
                    <button class="swiper-button-next phoinikas--button-next"></button>
                </div>
            </section>
            <!-- .phoinikas--home-foodmenu-slider -->

            <section class="phoinikas--banner-wednesday">

                <div class="swiper-slide">
                    <a href="{{ url('/menu/'.$banners[0]->url) }}" class="phoinikas--img-link">
                        <img src="{{ asset('storage/upload/'.$banners[0]->img_th_1) }}" alt="{{ $banners[0]->name_img_th_1 }}">
                        <img src="{{ asset('storage/upload/'.$banners[0]->img_th_2) }}" alt="{{ $banners[0]->name_img_th_2 }}">
                    </a>
                </div>
               
            </section>
            <!-- .phoinikas--banner-wednesday -->

            <section class="phoinikas--banner-location">
                <a href=" {{ asset('location') }}" class="phoinikas--banner">
                    <img src="/img/home/banner-map.png" alt="ค้นหา Sizzler ใกล้คุณ">
                </a>
            </section>
            <!-- .phoinikas--banner-location -->
        </div>

    </main>

<!-- <script type="text/javascript">jssor_1_slider_init();</script> -->
    <!-- #endregion Jssor Slider End -->
@endsection
