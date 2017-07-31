@extends('layouts.app')

@section('content')

<style type="text/css" media="screen">
      @media only screen and (min-width: 768px){
      .phoinikas--page-about .phoinikas--content {
      background: url('{{ asset('/img/story_sizzler/bg-ss-story.jpg')}}') no-repeat;
      background-position: center top;
      background-size: cover;
      }
     }
     table{
      margin: 0 auto;
     }



    </style>

<main class="phoinikas--body-main phoinikas--page-about">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<article class="phoinikas--content">
				<div class="phoinikas--content-wrapper">
					<h2>เรื่องราวดีๆ ที่ซิซซ์เล่อร์</h2>
					<p>
					ซิซซ์เล่อร์เป็นร้านอาหารประเภทสเต็ก ซีฟู้ด และสลัด สไตล์ตะวันตก โดยเป็นร้านอาหารแรกที่ได้
          นำสลัดบาร์มาให้บริการลูกค้า จนเป็นที่รู้จักกันอย่างกว้างขวาง สลัดบาร์ที่ซิซซ์เล่อร์ คัดสรรแต่ผักสดใหม่ทุกวัน
          พร้อมน้ำสลัดหลากสไตล์สูตรเฉพาะของซิซซ์เล่อร์ ซุปร้อน ๆ รสเลิศ แถมด้วยพาสต้าเส้นนุ่มและซอสรสเยี่ยม
          ปิดท้ายด้วยช็อกโกแลตมูส เจลลี่ และผลไม้ตามฤดูกาล ให้ลูกค้าของเราได้อิ่มอร่อยไม่รู้จบ
          ซิซซ์เล่อร์ได้มีการพัฒนาเมนูอาหารอย่างต่อเนื่อง ปัจจุบันนี้ซิซซ์เล่อร์มีอาหารหลากหลาย
          ประเภท ไม่ว่าจะเป็นสเต็กเนื้อ ไก่ หมู ซีฟู้ด ทั้งย่างหรือทอด
          ให้เลือกหลากหลายรายการ ตามความต้องการของลูกค้า
          </p>

					<p>
						“ความหลากหลายของอาหาร” และ “อิสระในการเลือกตักสลัดบาร์ตามที่คุณต้องการ” <br>
            เป็นสิ่งที่ทำให้ลูกค้าซิซซ์เล่อร์ได้สัมผัสกับประสบการณ์ที่แตกต่างจากร้านอาหารอื่นๆ ทั่วไป สลัดบาร์ที่หลากหลาย กว่า 50 รายการของซิซซ์เล่อร์สามารถตอบสนองความต้องการของลูกค้าได้ทุกรูปแบบ
            ไม่ว่าจะเลือกอิ่มจุใจ อิ่มเบาๆ หรืออิ่มแบบได้สุขภาพ
					</p>
          <p>
            ที่ซิซซ์เล่อร์ ลูกค้าจะได้พบกับร้านอาหารที่ตกแต่งอย่างร่วมสมัย สะอาด และสะดวกสบาย <br>
            ในบรรยากาศที่ เป็นกันเอง และที่นั่งที่จัดให้อย่างนั่งสบาย ไม่ว่าจะมาสังสรรค์ในหมู่เพือนฝูง <br>
            มารับประทานอาหารกับครอบครัวหรือจะเลือกมุมสงบกับคนรู้ใจซิซซ์เล่อร์ตอบทุกความต้องการ<br>
            ด้วยอาหารที่อร่อย สด สะอาด ได้คุณภาพมาตรฐานในบรรยากาศสบาย ๆ และพนักงานซิซซ์เล่อร์<br>
            ที่พร้อมให้บริการด้วยความรวดเร็ว อบอุ่นและเป็นมิตร
          </p>

            <p><b>
                ขอต้อนรับคุณสู่ซิซซ์เล่อร์<br>
                ที่ที่คุณจะได้สัมผัสกับทุกรสชาติของชีวิต ในบรรยากาศที่อบอวลไปด้วยความสุข
            </p>
            <p><b>
                สำหรับซิซซ์เล่อร์สาขาต่างประเทศ <br>
                สามารถคลิกได้ที่<br>
                </b>
            </p>
            <p>
                  สหรัฐอเมริกา  &nbsp;&nbsp; <a href="www.sizzler.com" style="color: black;">www.sizzler.com</a><br>
                  ออสเตรเลีย   &nbsp;&nbsp; <a href="www.sizzler.com.au" style="color: black;">www.sizzler.com.au</a><br>
                  จีน         &nbsp;&nbsp; <a href="www.sizzler.com.cn" style="color: black;">www.sizzler.com.cn</a><br>
                  เกาหลี      &nbsp;&nbsp; <a href="www.sizzler.co.kr" style="color: black;">www.sizzler.co.kr</a><br>
                  สิงคโปร์    &nbsp;&nbsp; <a href="www.sizzler.com.sg" style="color: black;">www.sizzler.com.sg</a><br>
                  ญี่ปุ่น       &nbsp;&nbsp; <a href="www.sizzler.jp" style="color: black;">www.sizzler.jp</a><br>
                  ไต้หวัน     &nbsp;&nbsp; <a href="www.sizzler.com.tw" style="color: black;">www.sizzler.com.tw</a><br>
                </b>
            </p>

					<!--<a href="location.html">
						<button type="button" name="button" class="phoinikas--btn-design-1"></button>
					</a> -->
				</div>
			</article>

			@include('layouts.widgets.map')
		</div>

	</main>
@endsection