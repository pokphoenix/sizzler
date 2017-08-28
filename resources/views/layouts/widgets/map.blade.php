<section class="phoinikas--banner-location">
	<a href="{{ (App::getLocale()=='th')  ? url('/th/location') : url('/en/location') }}" class="phoinikas--banner">
		@if (App::getLocale()=='th') 
		<img src="{{ asset('/img/promotion/banner-map-big.jpg') }}" alt="ค้นหา Sizzler ใกล้คุณ">
		@else
		<img src="{{ asset('/img/promotion/banner-map-big-en.jpg') }}" alt="ค้นหา Sizzler ใกล้คุณ">
		@endif
	</a>
</section>