@extends('layouts.app')

@section('content')
	<main class="phoinikas--body-main phoinikas--page-menu -combination">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--section-com-beef-1">
				<img src="{{ asset('/img/menu/img-com-beef-1.jpg')}}" alt="">
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
					<img src="{{ asset('/img/menu/img-com-beef-2.jpg')}}" alt="">
					<figcaption>
						บีฟลอยน์ และไก่ย่างสไปซี่ <br>
						Chargrilled Beef Loin <br>
						&amp; Spicy Griiled <br>
						Chicken
					</figcaption>
				</figure>

				<figure>
					<img src="{{ asset('/img/menu/img-com-beef-3.jpg')}}" alt="">
					<figcaption>
						บีฟลอยน์ และกุ้งเล็กเทมปุระ <br>
						Chargrilled Beef Loin <br>
						&amp; Tempura Shrimps
					</figcaption>
				</figure>
			</section>
		</div>

	</main>

 	
@endsection