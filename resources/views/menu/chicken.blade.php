@extends('layouts.app')

@section('content')
 	<main class="phoinikas--body-main phoinikas--page-menu">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--menu-maincourse -chicken">
				<img src="{{ asset('storage/upload/'.$data[0]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$data[1]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$data[2]->img_th) }}" alt="">	
				<img src="{{ asset('/img/menu/img-chicken-4.jpg') }}" alt="">
				
				<img src="{{ asset('storage/upload/'.$data[3]->img_th) }}" alt="">
			</section>

			@include('layouts.widgets.menu')
		</div>

	</main>

@endsection