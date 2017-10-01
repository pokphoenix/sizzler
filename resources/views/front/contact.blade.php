@extends('layouts.app')

@section('content')

<main class="phoinikas--body-main phoinikas--page-contact">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
		<form id="submitform" action="{{ $action }}" method="POST" >
		 {{ csrf_field() }}	
			@if (App::getLocale()=='th') 
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
						<input type="text" name="contact-name" id="" value="{{ old('contact-name') }}" placeholder="ชื่อ/นามสกุล">
                        @if ($errors->has('contact-name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact-name') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="phoinikas--form-row">
						<input type="tel" class="require-field" name="contact-tel" id="" placeholder="เบอร์โทรศัพท์" value="{{ old('contact-tel') }}">
						@if ($errors->has('contact-tel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact-tel') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="phoinikas--form-row">
						<input type="email" name="contact-email" id="" placeholder="Your Email" value="{{ old('contact-email') }}">
						@if ($errors->has('contact-email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact-email') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="phoinikas--form-row">
						<textarea name="contact-message" rows="8" cols="80" placeholder="Your Message">{{ old('contact-message') }}</textarea>
						@if ($errors->has('contact-message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact-message') }}</strong>
                            </span>
                        @endif
					</div>
					<button type="submit"  class="phoinikas--btn-design-2">SEND</button>
				</aside>
			</div>
			@else
			<h2>Contact Sizzler</h2>
			<div class="phoinikas--flex-row">
				<article class="phoinikas--contact-address">
					<p class="phoinikas--bold">
						SLRT Limited <br>15th Floor Berli Jucker House <br>99 Soi Rubia, Sukhumvit 42 Rd., <br> Bangkok 10110 Thailand <br><br>
						Tel: +66 2 365 6999 <br>
						Fax: +66 2 365 6960 <br>
						E-mail: SizzlerGM@minornet.com
					</p>

					<p>
						Please fill in the form below. <br>
            Our representative will get back to you ASAP.  <br>
					</p>
				</article>
				<aside class="phoinikas--contact-form">
					<div class="phoinikas--form-row">
						<input type="text" name="contact-name" id="" placeholder="Name/Surname" value="{{ old('contact-name') }}" >
                        @if ($errors->has('contact-name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact-name') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="phoinikas--form-row require-field">
						<input type="tel" class="require-field" name="contact-tel" id="" placeholder="Mobile" value="{{ old('contact-tel') }}">
                        @if ($errors->has('contact-tel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact-tel') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="phoinikas--form-row require-field">
						<input type="email" class="require-field" name="contact-email" id="" placeholder="E-mail" value="{{ old('contact-email') }}" >
                        @if ($errors->has('contact-email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact-email') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="phoinikas--form-row">
						<textarea name="contact-message" rows="8" cols="80" placeholder="Message">{{ old('contact-message') }}</textarea>
						 @if ($errors->has('contact-message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact-message') }}</strong>
                            </span>
                        @endif
					</div>
					<button type="submit" class="phoinikas--btn-design-2">Send</button>
				</aside>
			</div>
			@endif
		</div>
		</form>
	</main>
<style type="text/css">
.require-field { border-left: 5px solid #bf5329; }
#submitform label.error,#submitform div.validate_error {
  color:#bf5329;
  font-weight: bold;
}
</style>
<script src="{{ asset('plugin/jquery-validation/jquery.validate.min.js') }}"></script>
<script>
    $(function() {
        // validate signup form on keyup and submit
        $("#submitform").validate({
            rules: {
                'contact-name': {
                    maxlength: 200
                },
                'contact-tel': {
                    required: true,
                    maxlength: 200
                },
                'contact-email': {
                    required: true,
                    email: true
                },
                'contact-text': {
                    maxlength: 1000
                }
            }
        });
    });
    </script>
@endsection