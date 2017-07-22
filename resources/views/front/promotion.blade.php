@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-promotion">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--banner-wednesday phoinikas--section-space">
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
			<!-- .phoinikas--banner-wednesday -->

			<section class="phoinikas--home-foodmenu-slider">
				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						@foreach ($promotionSlider as $slider)
						
                        <div class="" style="width: 100%;">
                            <a href="{{ url('/'.$slider->url) }}" class="phoinikas--img-link">
                            	@if (App::getLocale()=='th') 
                            		<img src="{{ asset('storage/upload/'.$slider->img_th) }}" alt="{{ $slider->name_th }}" style="width: 100%;">
								@else
									<img src="{{ asset('storage/upload/'.$slider->img_en) }}" alt="{{ $slider->name_en }}" style="width: 100%;">
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

			<!-- .phoinikas--home-foodmenu-slider -->
      		<section class="phoinikas--home-banner phoinikas--section-space phoinikas--banner-3rdparty">
				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
					@foreach ($promotionSliderSub as $sub)
						<div class="swiper-slide phoinikas--swiper-slide">
						@if (App::getLocale()=='th') 
							<a href="{{ url('promotion/'.$sub->id) }}" class="phoinikas--banner"><img src="{{  asset('storage/upload/'.$sub->img_th) }}" alt="{{ $sub->name_th }}"></a>
						@else
							<a href="{{ url('promotion/'.$sub->id) }}" class="phoinikas--banner"><img src="{{  asset('storage/upload/'.$sub->img_en) }}" alt="{{ $sub->name_en }}"></a>
						@endif
							
						</div>
					@endforeach	
					</div>
				</div>
			</section>

			@include('layouts.widgets.map')
		</div>

	</main>
	<script src="{{ asset('js/home.js')}} "></script>
@endsection