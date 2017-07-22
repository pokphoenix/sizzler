@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-media -detail">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--media-detail">
				<div class="phoinikas--detail-youtube">
					<iframe width="560" height="315" src="{{ 'https://www.youtube.com/embed/'.$data->url }}" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="layout-th">
					<p class="phoinikas--caption-youtube" >
						{{ $data->short_desc_th }}
					</p>
				</div>
				<div class="layout-en">
					<p class="phoinikas--caption-youtube" >
						{{ $data->short_desc_en }}
					</p>
				</div>
			</section>
			<section class="phoinikas--media-footer">
				<h2 class="phoinikas--txt-h2">Media</h2>
				<footer class="phoinikas--media-tvc phoinikas--swiper-content">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							@foreach ($others as $tvc )
							<figure class="swiper-slide">
								<a href="{{ url('media/'.$tvc->id ) }}"><img src="{{ asset('storage/upload/'.$tvc->thumbnail_th) }}" alt=""></a>
							</figure>
							@endforeach
							
						</div>
					</div>

					<div class="swiper-pagination"></div>

				    <button class="swiper-button-prev"></button>
				    <button class="swiper-button-next"></button>
				</footer>
			</section>
		</div>

	</main>

	<script src=" {{ asset('js/media.js') }} "></script>
	
@endsection