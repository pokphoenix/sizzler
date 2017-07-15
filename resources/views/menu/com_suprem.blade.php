@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--menu-maincourse -beef">
				<img src="{{ asset('storage/upload/'.$data[0]->img_th) }}" style="width: 459px; height:314px; " alt="">
				<img src="{{ asset('storage/upload/'.$data[1]->img_th) }}" style="width: 520px; height:260px; "  alt="">
				<img src="{{ asset('storage/upload/'.$data[2]->img_th) }}" style="width: 260px; height:265px; "  alt="">	
				<img src="{{ asset('/img/menu/img-beef-1.png') }}" alt="">
				
				<img src="{{ asset('storage/upload/'.$data[3]->img_th) }}" style="width: 458px; height:210px; "  alt="">
			</section>

			<section class="phoinikas--menu-sidedish">
				<img src="/img/menu/img-sidedish-1.jpg" alt="เสิร์ฟฟรีกับทุกเมนูจานหลัก">
				<img src="/img/menu/img-sidedish-2.jpg" alt="Complementary Side  Dishes">
				<img src="/img/menu/img-sidedish-3.jpg" alt="Side Dishes photos">
				<img src="/img/menu/img-sidedish-4.jpg" alt="Signature Cheese Toast">
			</section>
		</div>

	</main>

@endsection