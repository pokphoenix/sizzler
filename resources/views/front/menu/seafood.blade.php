@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--menu-maincourse -seafood">
			@if (App::getLocale()=='th') 
				<img src="{{ isset($data[0]->img_th) ? asset('storage/upload/'.$data[0]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" style="height: 531px;"  alt="{{ $data[0]->name_th }}">
				<img src="{{ isset($seafoodCate->thumbnail_th) ? asset('storage/upload/'.$seafoodCate->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $seafoodCate->name_th }}">
				<img src="{{ isset($data[1]->img_th) ? asset('storage/upload/'.$data[1]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_th }}">
				<img src="{{ isset($data[2]->img_th) ? asset('storage/upload/'.$data[2]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" style="height: 305px;" alt="{{ $data[2]->name_th }}">
				<img src="{{ isset($data[3]->img_th) ? asset('storage/upload/'.$data[3]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_th }}">
			@else
				<img src="{{ isset($data[0]->img_en) ? asset('storage/upload/'.$data[0]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" style="height: 531px;"  alt="{{ $data[0]->name_en }}">
				<img src="{{ isset($seafoodCate->thumbnail_en) ? asset('storage/upload/'.$seafoodCate->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $seafoodCate->name_en }}">
				<img src="{{ isset($data[1]->img_en) ? asset('storage/upload/'.$data[1]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_en }}">
				<img src="{{ isset($data[2]->img_en) ? asset('storage/upload/'.$data[2]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" style="height: 305px;" alt="{{ $data[2]->name_en }}">
				<img src="{{ isset($data[3]->img_en) ? asset('storage/upload/'.$data[3]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_en }}">
			@endif
			</section>
			@include('layouts.widgets.menu')
		</div>

	</main>

@endsection