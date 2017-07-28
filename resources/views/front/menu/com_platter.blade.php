@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu -platter">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			@if (App::getLocale()=='th') 
			<section class="phoinikas--section-platter-1">
				<img src="{{ isset($data[0]->img_th) ? asset('storage/upload/'.$data[0]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_th }}" class="phoinikas--platter-img-big">

				<img src="{{ asset('/img/menu/txt-com-platter-header.png')}}" alt="" class="phoinikas--platter-header">

				<div class="phoinikas--platter-figcaption">
					{!! $data[0]->name_th !!}
				</div>
				<img src="{{ isset($data[1]->img_th) ? asset('storage/upload/'.$data[1]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_th }}" class="phoinikas--platter-img-small">
				<div class="phoinikas--platter-figcaption -bottom">
					{!! $data[1]->name_th !!}
				</div>
			</section>

			<section class="phoinikas--section-platter-2">
				<img src="{{ isset($data[3]->img_th) ? asset('storage/upload/'.$data[3]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_th }}" class="phoinikas--platter-img-big">

				<img src="{{ isset($data[2]->img_th) ? asset('storage/upload/'.$data[2]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_th }}" class="phoinikas--platter-img-small">
				<div class="phoinikas--platter-figcaption">
         			{!! $data[3]->name_th !!}
				</div>

				<div class="phoinikas--platter-figcaption -bottom">
					{!! $data[2]->name_th !!}
				</div>
			</section>
			@else
			<section class="phoinikas--section-platter-1">
				<img src="{{ isset($data[0]->img_en) ? asset('storage/upload/'.$data[0]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_en }}" class="phoinikas--platter-img-big">

				<img src="{{ asset('/img/menu/txt-com-platter-header.png')}}" alt="" class="phoinikas--platter-header">

				<div class="phoinikas--platter-figcaption">
					{!! $data[0]->name_en !!}
				</div>
				<img src="{{ isset($data[1]->img_en) ? asset('storage/upload/'.$data[1]->img_en) : asset('/img/resource/thumbnail-default.jpg')  }}" alt="{{ $data[1]->name_en }}" class="phoinikas--platter-img-small">
				<div class="phoinikas--platter-figcaption -bottom">
					{!! $data[1]->name_en !!}
				</div>
			</section>

			<section class="phoinikas--section-platter-2">
				<img src="{{ isset($data[3]->img_en) ? asset('storage/upload/'.$data[3]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_en }}" class="phoinikas--platter-img-big">

				<img src="{{ isset($data[2]->img_en) ? asset('storage/upload/'.$data[2]->img_en) : asset('/img/resource/thumbnail-default.jpg')  }}" alt="{{ $data[2]->name_en }}" class="phoinikas--platter-img-small">
				<div class="phoinikas--platter-figcaption">
         			{!! $data[3]->name_en !!}
				</div>

				<div class="phoinikas--platter-figcaption -bottom">
					{!! $data[2]->name_en !!}
				</div>
			</section>
			@endif
		</div>

	</main>

@endsection