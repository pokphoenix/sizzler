@extends('layouts.app')

@section('content')
 	<main class="phoinikas--body-main phoinikas--page-promotion">
        <div class="phoinikas--wrapper phoinikas--wrapper-global" style="background: #FFF;">
        	<section class="phoinikas--banner-2 phoinikas--section-space" style="margin-top:100px; border-bottom-width:0;">
                <p style=" text-align: center; color:#222; font-size: 72px;  ">
				@if (App::getLocale()=='th') 
                ขอบคุณสำหรับคำแนะนำ<BR>
                <span style=" text-align: center; color:#222; font-size:48px; ">ทางเราจะติดต่อกลับให้เร็วที่สุดค่ะ</span>
				@else
				Sizzler thankyou for you contact<BR>
				<span style=" text-align: center; color:#222; font-size:48px; ">we will call you soon.</span>
				
				@endif
                </p>
				<BR><BR>
                	<button type="button" onclick="window.location=' {{ url("/")  }} ';" class="phoinikas--btn-design-3" style="display: block ;margin:0 auto;" >Home</button>
            </section>
			
	
		

        </div>
    </main>
@endsection