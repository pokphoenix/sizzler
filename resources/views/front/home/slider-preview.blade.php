@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-home">
        <div class="phoinikas--wrapper phoinikas--wrapper-global">
            <section class="phoinikas--home-banner phoinikas--section-space">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                           @if (App::getLocale()=='th') 
                                <div class="swiper-slide phoinikas--swiper-slide">
                                    <a href="{{ url($lang.$data->url) }}" class="phoinikas--img-link"><img src="{{ isset($data->img_th) ? asset('storage/upload/'.$data->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data->name_th  }}"></a>
                                </div>
                            @else
                                <div class="swiper-slide phoinikas--swiper-slide">
                                    <a href="{{ url($lang.$data->url) }}" class="phoinikas--img-link"><img src="{{ isset($data->img_en) ? asset('storage/upload/'.$data->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data->name_en  }}"></a>
                                </div>
                            @endif
                    </div>
                </div>
            </section>
        </div>

    </main>
<script src="{{ asset('js/home.js') }}"></script>
  
@endsection
