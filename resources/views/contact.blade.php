@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-contact">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<h2>ติดต่อเรา</h2>
			<div class="phoinikas--flex-row">
				<article class="phoinikas--contact-address">
					<p class="phoinikas--bold">
						SLRT Limited ชั้น 15 เบอร์รี่ยุคเกอร์เฮ้าส์ 99 ซอยรูเบีย ถนนสุขุมวิท 42 กรุงเทพฯ 10110 ประเทศไทย <br>
						โทรศัพท์: +66 2 365 6999 <br>
						โทรสาร: +66 2 365 6960 <br>
						อีเมล: SizzlerGM@minornet.com
					</p>

					<p>
						หากท่านต้องการติดต่อซิซซ์เล่อร์  <br>
						กรุณากรอกข้อความลงแบบฟอร์มข้างล่าง <br>
						เจ้าหน้าที่ดูแลเรื่องของท่านจะติดต่อกลับหาท่าน ภายใน 5 วัน
					</p>
				</article>
				<aside class="phoinikas--contact-form">
					<div class="phoinikas--form-row">
						<input type="text" name="contact-name" id="" placeholder="ชื่อ/นามสกุล">
					</div>
					<div class="phoinikas--form-row">
						<input type="tel" name="contact-tel" id="" placeholder="เบอร์โทรศัพท์">
					</div>
					<div class="phoinikas--form-row">
						<input type="email" name="contact-email" id="" placeholder="Your Email">
					</div>
					<div class="phoinikas--form-row">
						<textarea name="contact-message" rows="8" cols="80" placeholder="Your Message"></textarea>
					</div>
					<button type="submit" name="button" class="phoinikas--btn-design-2">SEND</button>
				</aside>
			</div>
		</div>
	</main>

@endsection