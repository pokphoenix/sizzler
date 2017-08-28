@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-home">
        <div class="phoinikas--wrapper phoinikas--wrapper-global">
        
              <section class="phoinikas--home-foodmenu-slider" style="margin-top: 120px;">
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper" id="div-everyday-slide">
                        <!-- Slides -->
                        @foreach ($sliderSub as $sub)
                         <div class="" style="width: 100%;">
                            <a href="{{ url($lang.$sub['url'] ) }}" class="phoinikas--img-link">
                            @if (App::getLocale()=='th')
                                <img src="{{ isset($sub['img_th']) ? asset('storage/upload/'.$sub['img_th']) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $sub['name_th'] }}" style="width: 100%;">
                            @else
                                <img src="{{ isset($sub['img_en']) ? asset('storage/upload/'.$sub['img_en']) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $sub['name_en'] }}" style="width: 100%;">
                            @endif
                            </a>
                        </div>
                        @endforeach
                    </div>

                
                </div>
            </section>
        </div>

    </main>
<script src="{{ asset('js/home.js') }}"></script>
  
@endsection
