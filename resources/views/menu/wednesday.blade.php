@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu -wednesday">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			@if (App::getLocale()=='th') 
			<section class="phoinikas--section-wed-1">
				<img src="{{ isset($data[0]->img_th) ? asset('storage/upload/'.$data[0]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_th }}">
				<img src="{{ isset($data[1]->img_th) ? asset('storage/upload/'.$data[1]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_th }}">
				<img src="{{ isset($data[2]->img_th) ? asset('storage/upload/'.$data[2]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_th }}">
				<img src="{{ isset($data[3]->img_th) ? asset('storage/upload/'.$data[3]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_th }}">
				<img src="{{ isset($data[4]->img_th) ? asset('storage/upload/'.$data[4]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[4]->name_th }}">
			</section>
			<section class="phoinikas--section-wed-2 phoinikas--txt-header">
				<img src="{{ asset('/img/menu/txt-wed_night.png')}}" alt="">
			</section>
			<section class="phoinikas--section-wed-3">
				<img src="{{ isset($data[5]->img_th) ? asset('storage/upload/'.$data[5]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[5]->name_th }}">
				<img src="{{ isset($data[6]->img_th) ? asset('storage/upload/'.$data[6]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[6]->name_th }}">
			</section>
			@else
			<section class="phoinikas--section-wed-1">
				<img src="{{ isset($data[0]->img_en) ? asset('storage/upload/'.$data[0]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_en }}">
				<img src="{{ isset($data[1]->img_en) ? asset('storage/upload/'.$data[1]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_en }}">
				<img src="{{ isset($data[2]->img_en) ? asset('storage/upload/'.$data[2]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_en }}">
				<img src="{{ isset($data[3]->img_en) ? asset('storage/upload/'.$data[3]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_en }}">
				<img src="{{ isset($data[4]->img_en) ? asset('storage/upload/'.$data[4]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[4]->name_en }}">
			</section>
			<section class="phoinikas--section-wed-2 phoinikas--txt-header">
				<img src="{{ asset('/img/menu/txt-wed_night.png')}}" alt="">
			</section>
			<section class="phoinikas--section-wed-3">
				<img src="{{ isset($data[5]->img_en) ? asset('storage/upload/'.$data[5]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[5]->name_en }}">
				<img src="{{ isset($data[6]->img_en) ? asset('storage/upload/'.$data[6]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[6]->name_en }}">
			</section>
			@endif
		</div>

	</main>

@endsection