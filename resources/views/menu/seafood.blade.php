@extends('layouts.app')

@section('content')

 	<main class="phoinikas--body-main phoinikas--page-menu">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<section class="phoinikas--menu-maincourse -seafood">
				<img src="{{ asset('storage/upload/'.$data[0]->img_th) }}"   alt="">
				<img src="{{ asset('/img/menu/img-seafood-2.png') }}" alt="">
				<img src="{{ asset('storage/upload/'.$data[1]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$data[2]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$data[3]->img_th) }}" alt="">
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