@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-tips">
	<div class="phoinikas--wrapper phoinikas--wrapper-global">
		<header class="phoinikas--tips-header">
			<h2 style="font-family: db_ozone;font-weight: 400;font-style: initial;">{{ trans('home.header_healthtip') }}</h2>
		</header>
		<section class="phoinikas--flex-row phoinikas--detail-row">
			<aside class="phoinikas--detail-aside">
				@foreach($aside as $a)
					<img src="{{ isset($a->image) ? asset('storage/upload/'.$a->image) : asset('/img/resource/thumbnail-default.jpg') }}" alt="" style="width: 100%; margin-bottom: 10px;">
				@endforeach
			</aside>
			<article class="phoinikas--detail-content">
				@if (App::getLocale()=='th') 
					<h3>{{ $data->title_th }}</h3>
					{!! $data->text_th !!}
				@else
					<h3>{{ $data->title_en }}</h3>
					{!! $data->text_en !!}
				@endif
				
			</article>
		</section>

		<footer class="phoinikas--detail-swiper phoinikas--swiper-content">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					@foreach ( $other as $o )
					<figure class="phoinikas--tips-item swiper-slide">
						@if (App::getLocale()=='th') 
							<a href="{{ url($lang.'healthtip/'.$o->id) }}">
								<img src="{{  isset($o->thumbnail_th) ? asset('storage/upload/'.$o->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $o->title_th }}">
							</a>
							<figcaption>
								<p>{!! $o->short_description_th !!}</p>
								<a href="{{ url($lang.'healthtip/'.$o->id) }}">More detail</a>
							</figcaption>
						@else
							<a href="{{ url($lang.'healthtip/'.$o->id) }}">
								<img src="{{ isset($o->thumbnail_en) ? asset('storage/upload/'.$o->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $o->title_en }}">
							</a>
							<figcaption>
								<p>{!! $o->short_description_en !!}</p>
								<a href="{{ url($lang.'healthtip/'.$o->id) }}">More detail</a>
							</figcaption>
						@endif
					</figure>
					@endforeach
				</div>
			</div>
			<button class="swiper-button-prev"></button>
			<button class="swiper-button-next"></button>
		</footer>
	</div>

</main>

<script src="{{ asset('js/tips.js') }}"></script>
@endsection