

<section class="phoinikas--menu-sidedish">
	@if (App::getLocale()=='th') 
	<img src="{{ asset('/img/menu/img-sidedish-1.jpg')}}" alt="เสิร์ฟฟรีกับทุกเมนูจานหลัก">
	<img src="{{ asset('/img/menu/img-sidedish-2.jpg')}}" alt="Complementary Side  Dishes">
	<img src="{{ asset('/img/menu/img-sidedish-3.jpg')}}" alt="Side Dishes photos">
	<img src="{{ asset('/img/menu/img-sidedish-4.jpg')}}" alt="Signature Cheese Toast">
	@else
	<img src="{{ asset('/img/menu/img-sidedish-1-en.jpg')}}" alt="เสิร์ฟฟรีกับทุกเมนูจานหลัก">
	<img src="{{ asset('/img/menu/img-sidedish-2-en.jpg')}}" alt="Complementary Side  Dishes">
	<img src="{{ asset('/img/menu/img-sidedish-3-en.jpg')}}" alt="Side Dishes photos">
	<img src="{{ asset('/img/menu/img-sidedish-4-en.jpg')}}" alt="Signature Cheese Toast">
	@endif
</section>