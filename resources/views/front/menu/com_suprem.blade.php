@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu -combination">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<header class="phoinikas--header-com-supreme">
				<h2><img src=" {{ asset('/img/menu/txt-com-supreme-h2.png')}}" alt="Combination Supreme 499.-"></h2>
			</header>
			@if (App::getLocale()=='th') 
			<section class="phoinikas--content-com-supreme">
				<img src="{{ isset($data[0]->img_th) ? asset('storage/upload/'.$data[0]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_th }}">
				<div class="phoinikas--flex-row">
					<figure>
						<img src="{{ isset($data[1]->img_th) ? asset('storage/upload/'.$data[1]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_th }}">
						<figcaption style="font-size: 26px;">
							{!! $data[1]->title_th !!}<BR>
							{!! $data[1]->title_en !!}<BR>
						</figcaption>
					</figure>

					<figure>
						<img src="{{ isset($data[2]->img_th) ? asset('storage/upload/'.$data[2]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_th }}">
						<figcaption style="font-size: 26px;">
							{!! $data[2]->title_th !!}<BR>
							{!! $data[2]->title_en !!}<BR>
						</figcaption>
					</figure>

					<figure class="phoinikas--badge-new">
						<img src="{{ isset($data[3]->img_th) ? asset('storage/upload/'.$data[3]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_th }}">
						<figcaption style="font-size: 26px;">
							{!! $data[3]->title_th !!}<BR>
							{!! $data[3]->title_en !!}<BR>
						</figcaption>
					</figure>
				</div>
			</section>
			@else
			<section class="phoinikas--content-com-supreme">
				<img src="{{ isset($data[0]->img_en) ? asset('storage/upload/'.$data[0]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_en }}">
				<div class="phoinikas--flex-row">
					<figure>
						<img src="{{ isset($data[1]->img_en) ? asset('storage/upload/'.$data[1]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_en }}">
						<figcaption style="font-size: 26px;">
							{!! $data[1]->title_en !!}<BR>
							{!! $data[1]->title_th !!}<BR>
						</figcaption>
					</figure>

					<figure>
						<img src="{{ isset($data[2]->img_en) ? asset('storage/upload/'.$data[2]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_en }}">
						<figcaption style="font-size: 26px;">
							{!! $data[2]->title_en !!}<BR>
							{!! $data[2]->title_th !!}<BR>
						</figcaption>
					</figure>

					<figure class="phoinikas--badge-new">
						<img src="{{ isset($data[3]->img_en) ? asset('storage/upload/'.$data[3]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_en }}">
						<figcaption style="font-size: 26px;">
							{!! $data[3]->title_en !!}<BR>
							{!! $data[3]->title_th !!}<BR>
						</figcaption>
					</figure>
				</div>
			</section>
			@endif
			
		</div>

	</main>

@endsection