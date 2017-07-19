@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu -combination">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<header class="phoinikas--header-com-supreme">
				<h2><img src="{{ asset('/img/menu/txt-com-supreme-h2.png')}}" alt="Combination Supreme 499.-"></h2>
			</header>
			<section class="phoinikas--content-com-supreme">
				<img src="{{ asset('/img/menu/img-com-supreme-1.jpg')}}" alt="">
				<div class="phoinikas--flex-row">
					<figure>
						<img src="{{ asset('/img/menu/img-com-supreme-2.jpg')}}" alt="">
						<figcaption>
							ซี่โครงหมูบาร์บิคิว <br> และไก่ย่างสไปซี่ <br> Barbecue Pork Spare Ribs <br> &amp; Spicy Grilled Chicken
						</figcaption>
					</figure>

					<figure>
						<img src="{{ asset('/img/menu/img-com-supreme-3.jpg')}}" alt="">
						<figcaption>
							ปลาบาชาย่าง <br> และพอร์คลอยน์ <br> Grilled Basa <br> &amp; Pork Loin
						</figcaption>
					</figure>

					<figure class="phoinikas--badge-new">
						<img src="{{ asset('/img/menu/img-com-supreme-4.jpg')}}" alt="">
						<figcaption>
							ไก่ย่างเซาท์เวสต์ <br> และซี่โครงหมูบาร์บิคิว <br> Southwest Grilled Chicken <br> &amp; Barbecue Pork Spare Ribs
						</figcaption>
					</figure>
				</div>
			</section>
		</div>

	</main>

@endsection