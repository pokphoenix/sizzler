@extends('layouts.app')

@section('content')
	<main class="phoinikas--body-main phoinikas--page-menu">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">

			<section class="phoinikas--menu-maincourse -pork">
				@if (App::getLocale()=='th') 
				<img src="{{ asset('storage/upload/'.$data[0]->img_th) }}" alt="{{ $data[0]->name_th }}">
				<img src="{{ asset('storage/upload/'.$data[1]->img_th) }}" alt="{{ $data[1]->name_th }}">
				<img src="{{ asset('storage/upload/'.$data[2]->img_th) }}" alt="{{ $data[2]->name_th }}">
				<img src="{{ asset('storage/upload/'.$porkCate->thumbnail_th) }} " alt="{{ $porkCate->name_th }}">
				<img src="{{ asset('storage/upload/'.$data[3]->img_th) }}" alt="{{ $data[3]->name_th }}">
				@else
				<img src="{{ asset('storage/upload/'.$data[0]->img_en) }}" alt="{{ $data[0]->name_en }}">
				<img src="{{ asset('storage/upload/'.$data[1]->img_en) }}" alt="{{ $data[1]->name_en }}">
				<img src="{{ asset('storage/upload/'.$data[2]->img_en) }}" alt="{{ $data[2]->name_en }}">
				<img src="{{ asset('storage/upload/'.$porkCate->thumbnail_en) }} " alt="{{ $porkCate->name_en }}">
				<img src="{{ asset('storage/upload/'.$data[3]->img_en) }}" alt="{{ $data[3]->name_en }}">
				@endif
			</section>

			@include('layouts.widgets.menu')
		</div>

	</main>

 	

@endsection