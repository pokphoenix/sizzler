@extends('layouts.app')

@section('content')

<main class="phoinikas--body-main phoinikas--page-home">
        <div class="phoinikas--wrapper phoinikas--wrapper-global">
            <section class="phoinikas--banner-wednesday phoinikas--section-space" style="margin-top:125px;">
                <a href="{{ url($lang.$banners[0]->url) }}" class="phoinikas--img-link">
                @if (App::getLocale()=='th') 
                    <img src="{{ isset($banners[0]->img_th_1) ? asset('storage/upload/'.$banners[0]->img_th_1) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $banners[0]->name_img_th_1 }}">
                    <img src="{{ isset($banners[0]->img_th_2) ? asset('storage/upload/'.$banners[0]->img_th_2) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $banners[0]->name_img_th_2 }}">
                @else
                    <img src="{{ isset($banners[0]->img_en_1) ? asset('storage/upload/'.$banners[0]->img_en_1) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $banners[0]->name_img_en_1 }}">
                    <img src="{{ isset($banners[0]->img_en_2) ? asset('storage/upload/'.$banners[0]->img_en_2) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $banners[0]->name_img_en_2 }}">
                @endif   
                </a>
            </section>
        </div>

    </main>
<script src="{{ asset('js/home.js') }}"></script>
  
@endsection
