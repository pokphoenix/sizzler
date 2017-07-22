@extends('layouts.app')

@section('content')

<main class="phoinikas--body-main phoinikas--page-home">
        <div class="phoinikas--wrapper phoinikas--wrapper-global">
            <section class="phoinikas--home-banner phoinikas--section-space">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($sliderMains as $s)
                            @if (App::getLocale()=='th') 
                                <div class="swiper-slide phoinikas--swiper-slide">
                                    <a href="{{ url($s->url)  }}" class="phoinikas--img-link"><img src="{{ asset('storage/upload/'.$s->img_th) }}" alt="{{ $s->name_th  }}"></a>
                                </div>
                            @else
                                <div class="swiper-slide phoinikas--swiper-slide">
                                    <a href="{{ url($s->url)  }}" class="phoinikas--img-link"><img src="{{ asset('storage/upload/'.$s->img_en) }}" alt="{{ $s->name_en  }}"></a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>


            <section class="phoinikas--banner-2 phoinikas--section-space">
                <a href="http://www.sizzler.co.th/e-member/" class="phoinikas--img-link">
                    <img src="{{ asset('img/home/banner-member.jpg') }}" alt="ชวนคุณสมัครสมาชิก รับสิทธิพิเศษมากมาย">
                </a>
            </section>
            <!-- .phoinikas--banner-salad -->

            <section class="phoinikas--home-banner-3">
                <h2 class="phoinikas--home-h2">Health &nbsp;Tips</h2>
                <div id="div-flex-data" class="phoinikas--flex-row">
                    @foreach ($healthtip as $h )
                    <figure>
                        @if (App::getLocale()=='th')
                            <a href="{{  url('healthtip/'.$h->id) }}">
                                <img src="{{ asset('storage/upload/'.$h->thumbnail_th ) }}" alt="{{ $h->title_th }}">
                            </a>
                            <figcaption>
                                {{ $h->title_th }}
                            </figcaption>
                        @else
                            <a href="{{  url('healthtip/'.$h->id) }}">
                                <img src="{{ asset('storage/upload/'.$h->thumbnail_en ) }}" alt="{{ $h->title_en }}">
                            </a>
                            <figcaption>
                                {{ $h->title_en }}
                            </figcaption>
                        @endif
                    </figure>
                    @endforeach
                </div>
            </section>
           

            <section class="phoinikas--home-foodmenu-slider">
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper" id="div-everyday-slide">
                        <!-- Slides -->
                        @foreach ($sliderSub as $sub)
                         <div class="" style="width: 100%;">
                            <a href="{{ url('/'.$sub->url) }}" class="phoinikas--img-link">
                            @if (App::getLocale()=='th')
                                <img src="{{ asset('storage/upload/'.$sub->img_th) }}" alt="{{ $sub->name_th }}" style="width: 100%;">
                            @else
                                <img src="{{ asset('storage/upload/'.$sub->img_en) }}" alt="{{ $sub->name_en }}" style="width: 100%;">
                            @endif
                            </a>
                        </div>
                        @endforeach
                    </div>

                    <!-- If we need navigation buttons -->
        <!--            <button class="swiper-button-prev phoinikas--button-prev"></button>
                    <button class="swiper-button-next phoinikas--button-next"></button> -->
                </div>
            </section>
            <!-- .phoinikas--home-foodmenu-slider -->

            <section class="phoinikas--banner-wednesday">
                <a href="{{ url('/'.$banners[0]->url) }}" class="phoinikas--img-link">
                @if (App::getLocale()=='th') 
                    <img src="{{ asset('storage/upload/'.$banners[0]->img_th_1) }}" alt="{{ $banners[0]->name_img_th_1 }}">
                    <img src="{{ asset('storage/upload/'.$banners[0]->img_th_2) }}" alt="{{ $banners[0]->name_img_th_2 }}">
                @else
                    <img src="{{ asset('storage/upload/'.$banners[0]->img_en_1) }}" alt="{{ $banners[0]->name_img_en_1 }}">
                    <img src="{{ asset('storage/upload/'.$banners[0]->img_en_2) }}" alt="{{ $banners[0]->name_img_en_2 }}">
                @endif
                </a>
            </section>
      

            <section class="phoinikas--banner-location">
                <a href="#" class="phoinikas--banner">
                    <img src="{{asset('img/menu/img-lunch-5.jpg')}}" alt="#">
                </a>
            </section>
            

            @include('layouts.widgets.map')
        </div>

    </main>
<script src="{{ asset('js/home.js') }}"></script>
  <script>
    (function($) {
        var $window = $(window),
            $html = $('#div-flex-data');
            $everyday = $('#div-everyday-slide');

        function resize() {
            if ($window.width() > 514) {
                $html.addClass('phoinikas--flex-row');
                $everyday.addClass('swiper-wrapper');
                return true;
            }

            $html.removeClass('phoinikas--flex-row');
            $everyday.removeClass('swiper-wrapper');
        }

        $window
            .resize(resize)
            .trigger('resize');
    })(jQuery);
  </script>
@endsection
