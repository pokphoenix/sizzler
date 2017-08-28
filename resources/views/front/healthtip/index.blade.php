@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-tips">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<header class="phoinikas--tips-header">
				<h2 style="font-family: db_ozone;font-weight: 400;font-style: initial;">{{ trans('home.header_healthtip') }}</h2>
			</header>
			<article class="phoinikas--tips-list">
				@foreach ( $healthtip as $h )
					@if (App::getLocale()=='th') 
					<figure class="phoinikas--tips-item">
						<a href="{{ url($lang.'healthtip/'.$h->id) }}">
							<img src="{{ isset($h->thumbnail_th) ? asset('storage/upload/'.$h->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $h->title_th }}">
						</a>
						<figcaption>
							<p>{!! $h->short_description_th !!}</p>
							<a href="{{ url($lang.'healthtip/'.$h->id) }}">More detail</a>
						</figcaption>
					</figure>
					@else
					<figure class="phoinikas--tips-item">
						<a href="{{ url($lang.'healthtip/'.$h->id) }}">
							<img src="{{ isset($h->thumbnail_en) ? asset('storage/upload/'.$h->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $h->title_en }}">
						</a>
						<figcaption>
							<p>{!! $h->short_description_en !!}</p>
							<a href="{{ url($lang.'healthtip/'.$h->id) }}">More detail</a>
						</figcaption>
					</figure>
					@endif
				
				@endforeach
			</article>
			<footer class="phoinikas--pagination">
				<a href="javascript:void(0);" class="phoinikas--pagination-circle">1</a>
				<a href="javascript:void(0);" class="phoinikas--pagination-circle">2</a>
				<a href="javascript:void(0);" class="phoinikas--pagination-circle -active">3</a>
				<a href="javascript:void(0);" class="phoinikas--pagination-circle">4</a>
				<a href="javascript:void(0);" class="phoinikas--pagination-circle">5</a>
				<a href="javascript:void(0);" class="phoinikas--pagination-circle">6</a>
			</footer>
		</div>

	</main>

<script src="{{ asset('js/tips.js') }}"></script>
@endsection