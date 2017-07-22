@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu -everyday">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--section-everyday-1">
				<img src="{{asset('/img/menu/img-everyday-1.jpg')}}" alt="">
			</section>

			<section class="phoinikas--section-everyday-2 phoinikas--txt-header">
				<img src="{{asset('/img/menu/txt-everyday.png')}}" alt="">
			</section>

			<section class="phoinikas--section-everyday-3">
				<img src="{{asset('/img/menu/img-everyday-2.jpg')}}" alt="">
				<img src="{{asset('/img/menu/img-everyday-3.jpg')}}" alt="">
			</section>

      <section class="phoinikas--section-everyday-4">
        <img src="{{asset('/img/menu/img-everyday-5.png')}}" alt="" style="margin-top: 24px;">
			</section>
		</div>

	</main>

@endsection