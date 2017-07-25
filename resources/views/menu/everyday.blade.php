@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu -everyday">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			@if (App::getLocale()=='th') 
			<section class="phoinikas--section-everyday-1">
				<img src="{{ isset($data[0]->img_th) ? asset('storage/upload/'.$data[0]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_th }}">
			</section>

			<section class="phoinikas--section-everyday-2 phoinikas--txt-header">
				<img src="{{asset('/img/menu/txt-everyday.png')}}" alt="">
			</section>

			<section class="phoinikas--section-everyday-3">
				<img src="{{ isset($data[1]->img_th) ? asset('storage/upload/'.$data[1]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_th }}">
				<img src="{{ isset($data[2]->img_th) ? asset('storage/upload/'.$data[2]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_th }}">
			</section>

		    <section class="phoinikas--section-everyday-4">
		    	<img src="{{ isset($data[3]->img_th) ? asset('storage/upload/'.$data[3]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_th }}" style="margin-top: 24px;">
			</section>
			@else
			<section class="phoinikas--section-everyday-1">
				<img src="{{ isset($data[0]->img_en) ? asset('storage/upload/'.$data[0]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_en }}">
			</section>

			<section class="phoinikas--section-everyday-2 phoinikas--txt-header">
				<img src="{{asset('/img/menu/txt-everyday.png')}}" alt="">
			</section>

			<section class="phoinikas--section-everyday-3">
				<img src="{{ isset($data[1]->img_en) ? asset('storage/upload/'.$data[1]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_en }}">
				<img src="{{ isset($data[2]->img_en) ? asset('storage/upload/'.$data[2]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_en }}">
			</section>

		    <section class="phoinikas--section-everyday-4">
		    	<img src="{{ isset($data[3]->img_en) ? asset('storage/upload/'.$data[3]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_en }}" style="margin-top: 24px;">
			</section>
			@endif
		</div>

	</main>

@endsection