@extends('layouts.app')

@section('content')
 	<main class="phoinikas--body-main phoinikas--page-menu">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			@if (App::getLocale()=='th') 
			<section class="phoinikas--menu-maincourse -beef">
				<img src="{{ asset('storage/upload/'.$beef[0]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$beef[1]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$beef[2]->img_th) }}" alt="">	
				<img src="{{ asset('storage/upload/'.$beefCate->thumbnail_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$beef[3]->img_th) }}" alt="">
			</section>

			<section class="phoinikas--menu-maincourse -pork">
				<img src="{{ asset('storage/upload/'.$pork[0]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$pork[1]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$pork[2]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$porkCate->thumbnail_th) }} " alt="">
				<img src="{{ asset('storage/upload/'.$pork[3]->img_th) }}" alt="">
			</section>

			<section class="phoinikas--menu-maincourse -seafood">
				<img src="{{ asset('storage/upload/'.$seafood[0]->img_th) }}"   alt="">
				<img src="{{ asset('storage/upload/'.$seafoodCate->thumbnail_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$seafood[1]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$seafood[2]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$seafood[3]->img_th) }}" alt="">
			</section>

			<section class="phoinikas--menu-maincourse -chicken">
				<img src="{{ asset('storage/upload/'.$chicken[0]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$chicken[1]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$chicken[2]->img_th) }}" alt="">	
				<img src="{{ asset('storage/upload/'.$chickenCate->thumbnail_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$chicken[3]->img_th) }}" alt="">
			</section>
			<section class="phoinikas--menu-maincourse -burgers">
				<img src="{{ asset('storage/upload/'.$burger[0]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$burger[1]->img_th) }}" alt="">
				<img src="{{ asset('storage/upload/'.$burger[2]->img_th) }}" alt="">
			</section>
			<section class="phoinikas--menu-maincourse -kids">
				<img src="{{ asset('storage/upload/'.$kidmenuCate->thumbnail_th) }} "  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[0]->img_th) }}"  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[1]->img_th) }}"  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[2]->img_th) }}"  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[3]->img_th) }}"  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[4]->img_th) }}"  alt="">
			</section>
			@else
			<section class="phoinikas--menu-maincourse -beef">
				<img src="{{ asset('storage/upload/'.$beef[0]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$beef[1]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$beef[2]->img_en) }}" alt="">	
				<img src="{{ asset('storage/upload/'.$beefCate->thumbnail_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$beef[3]->img_en) }}" alt="">
			</section>

			<section class="phoinikas--menu-maincourse -pork">
				<img src="{{ asset('storage/upload/'.$pork[0]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$pork[1]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$pork[2]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$porkCate->thumbnail_en) }} " alt="">
				<img src="{{ asset('storage/upload/'.$pork[3]->img_en) }}" alt="">
			</section>

			<section class="phoinikas--menu-maincourse -seafood">
				<img src="{{ asset('storage/upload/'.$seafood[0]->img_en) }}"   alt="">
				<img src="{{ asset('storage/upload/'.$seafoodCate->thumbnail_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$seafood[1]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$seafood[2]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$seafood[3]->img_en) }}" alt="">
			</section>

			<section class="phoinikas--menu-maincourse -chicken">
				<img src="{{ asset('storage/upload/'.$chicken[0]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$chicken[1]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$chicken[2]->img_en) }}" alt="">	
				<img src="{{ asset('storage/upload/'.$chickenCate->thumbnail_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$chicken[3]->img_en) }}" alt="">
			</section>
			<section class="phoinikas--menu-maincourse -burgers">
				<img src="{{ asset('storage/upload/'.$burger[0]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$burger[1]->img_en) }}" alt="">
				<img src="{{ asset('storage/upload/'.$burger[2]->img_en) }}" alt="">
			</section>
			<section class="phoinikas--menu-maincourse -kids">
				<img src="{{ asset('storage/upload/'.$kidmenuCate->thumbnail_en) }} "  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[0]->img_en) }}"  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[1]->img_en) }}"  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[2]->img_en) }}"  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[3]->img_en) }}"  alt="">
				<img src="{{ asset('storage/upload/'.$kidmenu[4]->img_en) }}"  alt="">
			</section>
			@endif
			
			@include('layouts.widgets.menu')
		</div>

	</main>

@endsection