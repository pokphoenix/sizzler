@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-tips">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<header class="phoinikas--tips-header">
				<h2>Health &nbsp;Tips</h2>
			</header>
			<article class="phoinikas--tips-list">
				@foreach ( $release as $r )
					@if (App::getLocale()=='th') 
						<figure class="phoinikas--tips-item">
							<a href="{{ url('release/'.$r->id) }}">
								<img src="{{ asset('storage/upload/'.$r->thumbnail_th ) }}" alt="{{ $r->title_th }}">
							</a>
							<figcaption>
								<p>{!! $r->short_description_th !!}</p>
								<a href="{{ url('release/'.$r->id) }}">More detail</a>
							</figcaption>
						</figure>
					@else
						<figure class="phoinikas--tips-item">
							<a href="{{ url('release/'.$r->id) }}">
								<img src="{{ asset('storage/upload/'.$r->thumbnail_en ) }}" alt="{{ $r->title_en }}">
							</a>
							<figcaption>
								<p>{!! $r->short_description_en !!}</p>
								<a href="{{ url('release/'.$r->id) }}">More detail</a>
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