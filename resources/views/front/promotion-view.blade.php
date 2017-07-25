@extends('layouts.app')

@section('content')
 <main class="phoinikas--body-main phoinikas--page-tips">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<header class="phoinikas--tips-header" style="background:  brown;">
				<h2>Promotion</h2>
			</header>

			<section class="phoinikas--flex-row phoinikas--detail-row">
				@if (App::getLocale()=='th') 
				<img src="{{ isset($data[0]->img_th) ? asset('storage/upload/'.$data[0]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="" style="margin: auto;">
				@else
				<img src="{{ isset($data[0]->img_en) ? asset('storage/upload/'.$data[0]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="" style="margin: auto;">
				@endif
			</section>


		</div>

	</main>

@endsection