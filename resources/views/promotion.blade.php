@extends('layouts.app')

@section('content')
 <main class="phoinikas--body-main phoinikas--page-promotion">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--banner-wednesday phoinikas--section-space">
				<a href="{{ url('/menu/'.$banners[0]->url) }}" class="phoinikas--img-link">
                    <img src="{{ asset('storage/upload/'.$banners[0]->img_th_1) }}" alt="{{ $banners[0]->name_img_th_1 }}">
                    <img src="{{ asset('storage/upload/'.$banners[0]->img_th_2) }}" alt="{{ $banners[0]->name_img_th_2 }}">
                </a>
			</section>
			<!-- .phoinikas--banner-wednesday -->

			<section class="phoinikas--home-foodmenu-slider">
				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->

						@foreach ($promotionSlider as $sub)
                        <div class="swiper-slide">
                            <a href="{{ url('/menu/'.$sub->url) }}" class="phoinikas--img-link">
                                <img src="{{ asset('storage/upload/'.$sub->img_th) }}" alt="">
                            </a>
                        </div>
                        @endforeach
						
					</div>

					<!-- If we need navigation buttons -->
					<button class="swiper-button-prev phoinikas--button-prev"></button>
					<button class="swiper-button-next phoinikas--button-next"></button>
				</div>
			</section>
			<!-- .phoinikas--home-foodmenu-slider -->

			<section class="phoinikas--banner-3rdparty">
				<a href="javascript:void(0);" class="phoinikas--banner">
					<img src="/img/promotion/img-3rdparty.jpg" alt="">
				</a>
			</section>

			<section class="phoinikas--banner-location">
				<a href="location.html" class="phoinikas--banner">
					<img src="/img/promotion/banner-map-big.jpg" alt="ค้นหา Sizzler ใกล้คุณ">
				</a>
			</section>
			<!-- .phoinikas--banner-location -->
		</div>

	</main>

@endsection