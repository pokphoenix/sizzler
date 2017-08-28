@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-media">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<h2 class="phoinikas--txt-h2"> {{ trans('home.header_media') }} </h2>
			<section class="phoinikas--media-tvc phoinikas--swiper-content">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<figure class="-slide">
							<a href="{{ url($lang.'media/'.$tvcs[1]->id ) }}"><img src="{{ isset($tvcs[1]->thumbnail_th) ? asset('storage/upload/'.$tvcs[1]->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt=""></a>
						</figure>
						{{-- @foreach ( $tvcs as $tvc )
						<figure class="swiper-slide">
							@if (App::getLocale()=='th') 
							<a href="{{ url($lang.'media/'.$tvc->id ) }}"><img src="{{ isset($tvc->thumbnail_th) ? asset('storage/upload/'.$tvc->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt=""></a>
							@else
							<a href="{{ url($lang.'media/'.$tvc->id ) }}"><img src="{{ isset($tvc->thumbnail_en) ? asset('storage/upload/'.$tvc->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt=""></a>
							@endif
						</figure>
						@endforeach --}}
					</div>
				</div>

				<div class="swiper-pagination"></div>

			    <button class="swiper-button-prev"></button>
			    <button class="swiper-button-next"></button>
			</section>

			{{-- <h2 class="phoinikas--txt-h2">Press Release</h2>
			<section class="phoinikas--media-press phoinikas--swiper-content">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						@foreach ($release as $r)
						<figure class="phoinikas--tips-item swiper-slide">
							@if (App::getLocale()=='th') 
							<a href="{{ url($lang.'release/'.$r->id) }}">
								<img src="{{ isset($r->thumbnail_th) ? asset('storage/upload/'.$r->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $r->name_th }}">
							</a>
							<figcaption>
								<p>{!! $r->short_description_th !!}</p>
								<a href="{{ url($lang.'release/'.$r->id) }}">More detail</a>
							</figcaption>
							@else
							<a href="{{ url($lang.'release/'.$r->id) }}">
								<img src="{{ isset($r->thumbnail_en) ? asset('storage/upload/'.$r->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $r->name_en }}">
							</a>
							<figcaption>
								<p>{!! $r->short_description_en !!}</p>
								<a href="{{ url($lang.'release/'.$r->id) }}">More detail</a>
							</figcaption>
							@endif
						</figure>
						@endforeach
					</div>
				</div>

				<div class="swiper-pagination"></div>

			    <button class="swiper-button-prev"></button>
			    <button class="swiper-button-next"></button>
			</section> --}}
		</div>

	</main>

	<script src=" {{ asset('js/media.js') }} "></script>
@endsection