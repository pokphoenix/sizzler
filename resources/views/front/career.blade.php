@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-career">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			
				@if (App::getLocale()=='th') 
				<article class="phoinikas--content-wrapper">
				<h3>ซิซซ์เล่อร์เป็นร้านอาหารที่ประสบความสำเร็จมากที่สุดร้านหนึ่งในประเทศไทย</h3>
				<p>
					ปัจจุบันนี้ซิซซ์เล่อร์มีร้านอาหารทั้งหมด 32 สาขาทั่วประเทศ และมีพนักงานทั้งหมดกว่า 1,600 คน และซิซซ์เล่อร์ยังคงขยายสาขาเพิ่มขึ้นอีกอย่างต่อเนื่องซิซซ์เล่อร์ให้ความสำคัญกับบุคลากรภายในองค์กรว่าเป็นทรัพยากรที่สำคัญที่สุดขององค์กร เพราะเราเชื่อว่า “อาหารจะดี บริการจะดี ถ้าบุคลากรเก่ง และมีความสามารถ” ที่ซิซซ์เล่อร์ เราเน้นเรื่องการพัฒนาบุคลากร เพื่อให้พนักงานมีความรู้ และทักษะ และมีความพร้อมที่จะก้าวหน้าต่อไปพร้อม ๆ กับการเจริญเติบโตของซิซซ์เล่อร์เพราะเราเน้นการพัฒนาคนในองค์กรให้เติบโตและมีความก้าวหน้าในอาชีพ ที่ซิซซ์เล่อร์ พนักงานจะได้รับการพัฒนาตั้งแต่ความรู้ขั้นพื้นฐานและทักษะในด้านเทคนิคเฉพาะต่าง ๆ ซึ่งพนักงานจะได้รับการพัฒนาในทักษะที่สูงขี้นเรื่อย ๆ อย่างต่อเนื่องตามตำแหน่งและความรับผิดชอบ ที่ซิซซ์เล่อร์ เราให้โอกาสความก้าวหน้าและผลตอบแทนสำหรับทุกคนที่พร้อม หากคุณมีความเชื่อมั่นและต้องการก้าวไปพร้อมกับซิซซ์เล่อร์ <br> ติดต่อเราได้ที่ <strong>Career at The Minor Food group</strong>
				</p>
				</article>
				@else
				<article class="phoinikas--content-wrapper" style=" text-align: left;">
				<center><h3>Sizzler is one of Thailand’s largest and most successful casual dining restaurant chains.</h3></center>
        <br>
        <p>
          &nbsp&nbsp&nbspSizzler has 32 restaurants nationwide employing over 1,600 employees with massive expansion plan for the coming years.
          Sizzler values its employees. We believe our employees are the Company’s most important asset.
        </p>
        <br>

          <p>
          &nbsp&nbsp&nbspSizzler promotes internally whenever possible giving our employees the opportunity to develop long and satisfying careers with the Company.
           We aim to give our existing employees the opportunity to advance their careers or to assume new responsibilities.
           </p>
           <br>
           <p>
          &nbsp&nbsp&nbspAs an equal opportunity employer, Sizzler prides itself in the diversity of our workforce. Full training, lifetime skills,
          opportunities to work towards nationally recognised qualifications through our traineeship program and management career
          opportunities are all on offer.
          </p>
          <br>
          <p>
          &nbsp&nbsp&nbspSizzler appreciates that people are seeking rewarding work and a meaningful career path. We acknowledge and recognise the hard work and effort of our people.
          It is the aim of the company to be the employer of choice in the industry.
          </p>
          <br>
          <center><p>
          If you look for the future with Sizzler Thailand, please get in touch with us.<h3>Career at The Minor Food group</h3>
        </p></center>



			</article>
				@endif
			
			<section class="phoinikas--career-interest">
				<strong>สนใจร่วมงานกับ SIZZLER</strong>
				<a href="#">
					<button type="button" name="button" class="phoinikas--btn-design-2">GO</button>
				</a>
			</section>
		</div>

	</main>

@endsection