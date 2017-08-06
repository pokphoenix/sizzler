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
				@for($i=1;$i<=3;$i++)
				<figure>
					<img src="{{ isset($data[$i]->img_th) ? asset('storage/upload/'.$data[$i]->img_th) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[$i]->name_th }}">

		
					<figcaption class="phoinikas--caption-price">
						<em class="phoinikas--remark">
							{!! isset($data[$i]->title_th) ? $data[$i]->title_th : '' !!}
							<span>{!! isset($data[$i]->title_en) ? $data[$i]->title_en : '' !!}</span>
						</em>
						<strong>{!! isset($data[$i]->price_th) ? $data[$i]->price_th : '' !!} .-</strong>
					</figcaption>
				</figure>
				@endfor
			
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
				@for($i=1;$i<=3;$i++)
				<figure>
					<img src="{{ isset($data[$i]->img_en) ? asset('storage/upload/'.$data[$i]->img_en) : asset('/img/resource/thumbnail-default.jpg') }}" alt="{{ $data[$i]->name_en }}">

					<figcaption class="phoinikas--caption-price">
						<em class="phoinikas--remark">
							{!! isset($data[$i]->title_en)  ? $data[$i]->title_en : '' !!}
							<span>{!! isset($data[$i]->title_th)  ? $data[$i]->title_th : '' !!}</span>
						</em>
						<strong>{!! isset($data[$i]->price_en)  ? $data[$i]->price_en : '' !!} .-</strong>
					</figcaption>
				</figure>
				@endfor
				
			</section>
			@endif
			

			<section class="phoinikas--section-lunch-4">
				<img src="{{ asset('/img/menu/img-lunch-5.jpg')}}" alt="">
			</section>
		</div>

	</main>
@endsection