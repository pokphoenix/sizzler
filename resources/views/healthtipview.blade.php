@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-tips">
	<div class="phoinikas--wrapper phoinikas--wrapper-global">
		<header class="phoinikas--tips-header">
			<h2>Health &nbsp;Tips</h2>
		</header>
		<section class="phoinikas--flex-row phoinikas--detail-row">
			<aside class="phoinikas--detail-aside">
				@foreach($aside as $a)
					<img src="{{ asset('storage/upload/'.$a->image) }}" alt="" style="width: 100%; margin-bottom: 10px;">
				@endforeach
			</aside>
			<article class="phoinikas--detail-content">
				{!! $data->text_th !!}
			</article>
		</section>

		<footer class="phoinikas--detail-swiper phoinikas--swiper-content">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					@foreach ( $other as $o )
					<figure class="phoinikas--tips-item swiper-slide">
						<a href="{{ url('healthtip/'.$o->id) }}">
							<img src="{{ asset('storage/upload/'.$o->thumbnail_th) }}" alt="{{ $o->title_th }}">
						</a>
						<figcaption>
							<p>{{ $o->short_description_th }}</p>
							<a href="{{ url('healthtip/'.$o->id) }}">More detail</a>
						</figcaption>
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