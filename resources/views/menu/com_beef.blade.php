@extends('layouts.app')

@section('content')
	<main class="phoinikas--body-main phoinikas--page-menu -combination">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			@if (App::getLocale()=='th') 
			<section class="phoinikas--section-com-beef-1">
				<img src="{{ isset($data[0]->img_th) ? asset('storage/upload/'.$data[0]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_th }}">
			</section>

			<section class="phoinikas--section-com-beef-2 phoinikas--flex-row">
				<div>
					<img src="{{ asset('/img/menu/txt-combination-beef.png')}}" alt="">
				</div>
				<div>
					<img src="{{ asset('/img/menu/badge-com-beef.png')}}" alt="">
				</div>
			</section>

			<section class="phoinikas--section-com-beef-3 phoinikas--flex-row">
				<figure>
					<img src="{{ isset($data[1]->img_th) ? asset('storage/upload/'.$data[1]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_th }}">
					<figcaption>
						{!! $data[1]->name_th !!}
					</figcaption>
				</figure>

				<figure>
					<img src="{{ isset($data[2]->img_th) ? asset('storage/upload/'.$data[2]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_th }}">
					<figcaption>
						{!! $data[2]->name_th !!}
					</figcaption>
				</figure>
			</section>
			@else
			<section class="phoinikas--section-com-beef-1">
				<img src="{{ isset($data[0]->img_en) ? asset('storage/upload/'.$data[0]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_en }}">
			</section>

			<section class="phoinikas--section-com-beef-2 phoinikas--flex-row">
				<div>
					<img src="{{ asset('/img/menu/txt-combination-beef.png')}}" alt="">
				</div>
				<div>
					<img src="{{ asset('/img/menu/badge-com-beef.png')}}" alt="">
				</div>
			</section>

			<section class="phoinikas--section-com-beef-3 phoinikas--flex-row">
				<figure>
					<img src="{{ isset($data[1]->img_en) ? asset('storage/upload/'.$data[1]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_en }}">
					<figcaption>
						{!! $data[1]->name_en !!}
					</figcaption>
				</figure>

				<figure>
					<img src="{{ isset($data[2]->img_en) ? asset('storage/upload/'.$data[2]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_en }}">
					<figcaption>
						{!! $data[2]->name_en !!}
					</figcaption>
				</figure>
			</section>

			@endif
		</div>

	</main>

 	
@endsection