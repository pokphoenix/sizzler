@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-promotion">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--banner-wednesday phoinikas--section-space">
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
			<!-- .phoinikas--banner-wednesday -->

			<section class="phoinikas--home-foodmenu-slider">
				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						@foreach ($promotionSlider as $slider)
						
                        <div class="" style="width: 100%;">
                            <a href="{{ url($lang.$slider->url) }}" class="phoinikas--img-link">
                            	@if (App::getLocale()=='th') 
                            		<img src="{{ isset($slider->img_th) ? asset('storage/upload/'.$slider->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $slider->name_th }}" style="width: 100%;">
								@else
									<img src="{{ isset($slider->img_en) ? asset('storage/upload/'.$slider->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $slider->name_en }}" style="width: 100%;">
								@endif
                            </a>
                        </div>
                        @endforeach
					</div>

					<!-- If we need navigation buttons -->
				<!-- 	<button class="swiper-button-prev phoinikas--button-prev"></button>
					<button class="swiper-button-next phoinikas--button-next"></button> -->
				</div>
			</section>
			@include('front.promotion.slider-width',['lang'=>$lang])
			@include('layouts.widgets.map')
		</div>

	</main>
	<script src="{{ asset('js/home.js')}} "></script>
@endsection