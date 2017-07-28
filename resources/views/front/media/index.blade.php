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
							@if (App::getLocale()=='th') 
							<a href="{{ url('media/'.$tvc->id ) }}"><img src="{{ isset($tvc->thumbnail_th) ? asset('storage/upload/'.$tvc->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt=""></a>
							@else
							<a href="{{ url('media/'.$tvc->id ) }}"><img src="{{ isset($tvc->thumbnail_en) ? asset('storage/upload/'.$tvc->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt=""></a>
							@endif
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
							@if (App::getLocale()=='th') 
							<a href="{{ url('release/'.$r->id) }}">
								<img src="{{ isset($r->thumbnail_th) ? asset('storage/upload/'.$r->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $r->name_th }}">
							</a>
							<figcaption>
								<p>{!! $r->short_description_th !!}</p>
								<a href="{{ url('release/'.$r->id) }}">More detail</a>
							</figcaption>
							@else
							<a href="{{ url('release/'.$r->id) }}">
								<img src="{{ isset($r->thumbnail_en) ? asset('storage/upload/'.$r->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $r->name_en }}">
							</a>
							<figcaption>
								<p>{!! $r->short_description_en !!}</p>
								<a href="{{ url('release/'.$r->id) }}">More detail</a>
							</figcaption>
							@endif
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