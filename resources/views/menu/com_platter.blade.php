@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu -platter">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--section-platter-1">
				<img src="{{ asset('/img/menu/img-com-platter-1.jpg')}}" alt="" class="phoinikas--platter-img-big">

				<img src="{{ asset('/img/menu/txt-com-platter-header.png')}}" alt="" class="phoinikas--platter-header">

				<div class="phoinikas--platter-figcaption">
					พอร์คลอยน์ <br>
					และไส้กรอกหมู
					<em>
						Pork Loin <br>
						&amp; Smoked Pork sausage
					</em>
				</div>

				<img src="{{ asset('/img/menu/img-com-platter-2.jpg')}}" alt="" class="phoinikas--platter-img-small">
				<div class="phoinikas--platter-figcaption -bottom">
					ไก่ย่างสไปซี<br>
					และพอร์คลอยน์
					<em>
						Spicy Grilled Chicken<br>
						&amp; Pork Loin
					</em>
				</div>
			</section>

			<section class="phoinikas--section-platter-2">
				<img src="{{ asset('/img/menu/img-com-platter-3.jpg')}}" alt="" class="phoinikas--platter-img-big">

				<img src="{{ asset('/img/menu/img-com-platter-4.jpg')}}" alt="" class="phoinikas--platter-img-small">

				<div class="phoinikas--platter-figcaption">
          ไก่ย่างสไปซี่
          และไส้กรอกหมู

					<em>
            Spicy Grilled Chicken <br>
            &amp; Smoked Pork
            Sausage
					</em>
				</div>

				<div class="phoinikas--platter-figcaption -bottom">
					ไก่ย่างสไปซีบาร์บีคิว<br>
					และกุ้งเล็กเทมปุระ
					<em>
						Hot &amp; Spicy BBQ Chicken <br>
						&amp; Tempura Shrimps
					</em>
				</div>
			</section>
		</div>

	</main>

@endsection