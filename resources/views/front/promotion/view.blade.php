@extends('layouts.app')

@section('content')
 <main class="phoinikas--body-main phoinikas--page-tips">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<header class="phoinikas--tips-header" style="background:  brown;">
				<h2>Promotion</h2>
			</header>
	
			 @foreach ($data as $sub)
				<section class="phoinikas--flex-row phoinikas--detail-row">
					@if (App::getLocale()=='th') 
						<img src="{{ isset($sub->thumbnail_th) ? asset('storage/upload/'.$sub->thumbnail_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $sub->name_th }}" style="margin: auto;">
	             
		            @else
		                <img src="{{ isset($sub->thumbnail_en) ? asset('storage/upload/'.$sub->thumbnail_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $sub->name_en }}" style="margin: auto;">
		            @endif
				</section>
	        @endforeach 
			<br><br>
		</div>

	</main>

@endsection