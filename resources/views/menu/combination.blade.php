@extends('layouts.app')

@section('content')
	<main class="phoinikas--body-main phoinikas--page-menu">
		<div class="phoinikas--wrapper phoinikas--wrapper-global phoinikas--wrapper-combination">
			<section class="phoinikas--section-combination -beef">
				<a href="{{ url('com-beef') }}" class="phoinikas--combination-text">
					<img src="{{ asset('/img/menu/txt-combination-beef.png')}}" alt="">
				</a>
				<a href="{{ url('com-beef') }}" class="phoinikas--combination-img">
					<img src="{{ asset('/img/menu/img-combination-beef.jpg')}}" alt="">
				</a>

			</section>
			<section class="phoinikas--section-combination -supreme">
				<a href="{{ url('com-suprem') }}" class="phoinikas--combination-text">
					<img src="{{ asset('/img/menu/txt-combination-supreme.png')}}" alt="">
				</a>
				<a href="{{ url('com-suprem') }}" class="phoinikas--combination-img">
					<img src="{{ asset('/img/menu/img-combination-supreme.jpg')}}" alt="">
				</a>
			</section>
			<section class="phoinikas--section-combination -platter">
				<a href="{{ url('com-platter') }}" class="phoinikas--combination-text">
					<img src="{{ asset('/img/menu/txt-combination-platter.png')}}" alt="">
				</a>
				<a href="{{ url('com-platter') }}" class="phoinikas--combination-img">
					<img src="{{ asset('/img/menu/img-combination-platter.jpg')}}" alt="">
				</a>
			</section>
		</div>

	</main>

 	
@endsection