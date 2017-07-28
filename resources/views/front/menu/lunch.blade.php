@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu -lunch">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			@if (App::getLocale()=='th') 
			<section class="phoinikas--section-lunch-1 phoinikas--txt-header">
				<img src="{{ asset('/img/menu/txt-lunch-header.png')}}" alt="">
			</section>

			<div class="phoinikas--lunch-condition">
				เมนูราคาพิเศษสำหรับมื้อกลางวัน <span>11:00 น. - 15:00 น.</span> <br> Monday - Friday Opening - 3 pm <span>*Except Public Holiday</span>
			</div>

			<section class="phoinikas--section-lunch-2">
				<figure>
					<img src="{{ isset($data[0]->img_th) ? asset('storage/upload/'.$data[0]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_th }}">
					<!-- <figcaption>
						(ยกเว้นวันหยุดราชการหรือวันหยุดนักขัตฤกษ์ ไม่สามารถใช้ร่วมกับโปรโมชั่นอื่นได้ จำกัด side dish ตามรูป) ขอสงวนสิทธิ์กำหนดไซ์ดิชตามรูปสำหรับเมนูอาหารกลางวัน
					</figcaption> -->
				</figure>
			</section>

			<section class="phoinikas--section-lunch-3 phoinikas--flex-row">
				<figure>
					<img src="{{ isset($data[1]->img_th) ? asset('storage/upload/'.$data[1]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_th }}">

					<!-- <img src="{{ asset('/img/menu/img-lunch-2.jpg')}}" alt="">
					<figcaption class="phoinikas--caption-price">
						<em class="phoinikas--remark">
							ปลาชุบเกล็ดขนมปังทอด
							<span>Crumbed Fish</span>
						</em>
						<strong>179.-</strong>
					</figcaption> -->
				</figure>

				<figure>
					<img src="{{ isset($data[2]->img_th) ? asset('storage/upload/'.$data[2]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_th }}">
					<!-- <img src="{{ asset('/img/menu/img-lunch-3.jpg')}}" alt="">
					<figcaption class="phoinikas--caption-price">
						<em class="phoinikas--remark">
							สเต็กเนื้อออสเตรเลียจานร้อน
							<span>Sizzling Australian Beef</span>
						</em>
						<strong>399.-</strong>
					</figcaption> -->
				</figure>

				<figure>
					<img src="{{ isset($data[3]->img_th) ? asset('storage/upload/'.$data[3]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_th }}">
					<!-- <img src="{{ asset('/img/menu/img-lunch-4.jpg')}}" alt="">
					<figcaption class="phoinikas--caption-price">
						<em class="phoinikas--remark">
							สเต็กเนื้อบดเทอริยากิ
							<span>Teriyaki &amp; Mushroom Australian Chopped Steak</span>
						</em>
						<strong>229.-</strong>
					</figcaption> -->
				</figure>
			</section>
			@else
			<section class="phoinikas--section-lunch-1 phoinikas--txt-header">
				<img src="{{ asset('/img/menu/txt-lunch-header.png')}}" alt="">
			</section>

			<div class="phoinikas--lunch-condition">
				เมนูราคาพิเศษสำหรับมื้อกลางวัน <span>11:00 น. - 15:00 น.</span> <br> Monday - Friday Opening - 3 pm <span>*Except Public Holiday</span>
			</div>

			<section class="phoinikas--section-lunch-2">
				<figure>
					<img src="{{ isset($data[0]->img_en) ? asset('storage/upload/'.$data[0]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[0]->name_en }}">
					<!-- <figcaption>
						(ยกเว้นวันหยุดราชการหรือวันหยุดนักขัตฤกษ์ ไม่สามารถใช้ร่วมกับโปรโมชั่นอื่นได้ จำกัด side dish ตามรูป) ขอสงวนสิทธิ์กำหนดไซ์ดิชตามรูปสำหรับเมนูอาหารกลางวัน
					</figcaption> -->
				</figure>
			</section>

			<section class="phoinikas--section-lunch-3 phoinikas--flex-row">
				<figure>
					<img src="{{ isset($data[1]->img_en) ? asset('storage/upload/'.$data[1]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[1]->name_en }}">

					<!-- <img src="{{ asset('/img/menu/img-lunch-2.jpg')}}" alt="">
					<figcaption class="phoinikas--caption-price">
						<em class="phoinikas--remark">
							ปลาชุบเกล็ดขนมปังทอด
							<span>Crumbed Fish</span>
						</em>
						<strong>179.-</strong>
					</figcaption> -->
				</figure>

				<figure>
					<img src="{{ isset($data[2]->img_en) ? asset('storage/upload/'.$data[2]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[2]->name_en }}">
					<!-- <img src="{{ asset('/img/menu/img-lunch-3.jpg')}}" alt="">
					<figcaption class="phoinikas--caption-price">
						<em class="phoinikas--remark">
							สเต็กเนื้อออสเตรเลียจานร้อน
							<span>Sizzling Australian Beef</span>
						</em>
						<strong>399.-</strong>
					</figcaption> -->
				</figure>

				<figure>
					<img src="{{ isset($data[3]->img_en) ? asset('storage/upload/'.$data[3]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[3]->name_en }}">
					<!-- <img src="{{ asset('/img/menu/img-lunch-4.jpg')}}" alt="">
					<figcaption class="phoinikas--caption-price">
						<em class="phoinikas--remark">
							สเต็กเนื้อบดเทอริยากิ
							<span>Teriyaki &amp; Mushroom Australian Chopped Steak</span>
						</em>
						<strong>229.-</strong>
					</figcaption> -->
				</figure>
			</section>
			@endif
			

			<section class="phoinikas--section-lunch-4">
				<img src="{{ asset('/img/menu/img-lunch-5.jpg')}}" alt="">
			</section>
		</div>

	</main>

@endsection