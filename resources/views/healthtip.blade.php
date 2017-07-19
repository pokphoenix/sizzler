@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-tips">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<header class="phoinikas--tips-header">
				<h2>Health &nbsp;Tips</h2>
			</header>
			<article class="phoinikas--tips-list">
				@foreach ( $healthtip as $h )
				<figure class="phoinikas--tips-item">
					<a href="{{ url('healthtip/'.$h->id) }}">
						<img src="{{ asset('storage/upload/'.$h->thumbnail_th ) }}" alt="{{ $h->title_th }}">
					</a>
					<figcaption>
						<p>{{ $h->short_description_th }}</p>
						<a href="{{ url('healthtip/'.$h->id) }}">More detail</a>
					</figcaption>
				</figure>
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