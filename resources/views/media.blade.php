@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-media">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<h2 class="phoinikas--txt-h2">TVC</h2>
			<section class="phoinikas--media-tvc phoinikas--swiper-content">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						@foreach ( $tvcs as $tvc )
						<figure class="swiper-slide">
							<a href="{{ url('media/'.$tvc->id ) }}"><img src="{{ asset('storage/upload/'.$tvc->thumbnail_th) }}" alt=""></a>
						</figure>
						@endforeach
					</div>
				</div>

				<div class="swiper-pagination"></div>

			    <button class="swiper-button-prev"></button>
			    <button class="swiper-button-next"></button>
			</section>

			<h2 class="phoinikas--txt-h2">Press Release</h2>
			<section class="phoinikas--media-press phoinikas--swiper-content">
				<div class="swiper-container">
					<div class="swiper-wrapper">

						@foreach ($release as $r)

						<figure class="phoinikas--tips-item swiper-slide">
							<a href="{{ url('release/'.$r->id) }}">
								<img src="{{ asset('storage/upload/'.$r->thumbnail_th)  }}" alt="">
							</a>
							<figcaption>
								<p>{{ $r->short_description_th }}</p>
								<a href="{{ url('release/'.$r->id) }}">More detail</a>
							</figcaption>
						</figure>
						@endforeach
						
					</div>
				</div>

				<div class="swiper-pagination"></div>

			    <button class="swiper-button-prev"></button>
			    <button class="swiper-button-next"></button>
			</section>
		</div>

	</main>

	<script src=" {{ asset('js/media.js') }} "></script>
@endsection