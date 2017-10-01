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

        
        @if (App::getLocale()=='th') 
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
                ที่ที่คุณจะได้สัมผัสกับทุกรสชาติของชีวิต ในบรรยากาศที่อบอวลไปด้วยความสุข</b>
            </p>
            <p><b>
                สำหรับซิซซ์เล่อร์สาขาต่างประเทศ <br>
                สามารถคลิกได้ที่<br>
                </b>
            </p>
            <p>
                <b>
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


        @else
        <div class="phoinikas--content-wrapper">
          <h2>The Sizzler Story</h2>
          <p>
          Sizzler invented 'casual dining' in Australia and introduced the first Soup, Salad, Pasta, Fresh Fruit and Dessert Bar concept.
          Since those pioneering days, we have expanded our 'classic grill' to include, not only steak and seafood, but also delicious chicken dishes,
          BBQ ribs, combination meals, and burgers.
          </p>

          <p>'Variety' and 'freedom to choose' set Sizzler apart from other dining experiences.<br> At Sizzler customers are free to control the volume,
           nutritional balance and variety <br>of each meal by ordering from the grill and helping themselves to our famous Soup, Salad, Pasta,
           Fruit and Dessert Bars.
          </p>
          <p>
            Sizzler presents a warm, friendly face to its customers who represent a wide range<br> of people.
            Our on-going commitment to broadening the 'casual dining' experience has made Sizzler one of the most popular and best value for money contemporary
            restaurants.
          </p>
          <p>
            Sizzler's distinctively designed, clean, friendly restaurants offer a 'casual dining' alternative that comfortably sits between fast food and fine dining.
            <br>When you add quick service and a healthy variety of high quality, good value,<br> freshly prepared meals, it's no wonder that Sizzler remains one of most
            favourite dining destinations
          </p>


            <p><b>
                More information - Sizzler International link
                </b>
            </p>

            <table>
              <thead>
              <th style="width: 100px"></th>
              <th style="width: 100px"></th>
              </thead>
              <tbody>
                <tr>
                  <td style="text-align: left;">U.S.A</td>
                  <td style="float: left;"><a href="http://www.sizzler.com" style="color: black;" target="_blank">www.sizzler.com</a></td>
                </tr>
                <tr>
                  <td style="text-align: left;">AUSTRALIA</td>
                  <td style="float: left;"><a href="http://www.sizzler.com.au" style="color: black;" target="_blank">www.sizzler.com.au</a></td>
                </tr>
                <tr>
                  <td style="text-align: left;">CHINA</td>
                  <td style="float: left;"><a href="http://www.sizzler.com.cn" style="color: black;" target="_blank">www.sizzler.com.cn</a></td>
                </tr>
                <tr>
                  <td style="text-align: left;">KOREA</td>
                  <td style="float: left;"><a href="http://www.sizzler.co.kr" style="color: black;" target="_blank">www.sizzler.co.kr</a></td>
                </tr>
                <tr>
                  <td style="text-align: left;">SINGAPORE</td>
                  <td style="float: left;"><a href="http://www.sizzler.com.sg" style="color: black;" target="_blank">www.sizzler.com.sg</a></td>
                </tr>
                  <tr>
                  <td style="text-align: left;">JAPAN</td>
                  <td style="float: left;"><a href="http://www.sizzler.jp" style="color: black;" target="_blank">www.sizzler.jp</a></td>
                </tr>
                  <tr>
                  <td style="text-align: left;">TAIWAN</td>
                  <td style="float: left;"><a href="http://www.sizzler.com.tw" style="color: black;" target="_blank">www.sizzler.com.tw</a></td>
                </tr>
              </tbody>
            </table>
            <!--        สหรัฐอเมริกา

                  ออสเตรเลีย
                  <a href="www.sizzler.com.au" style="color: black;">www.sizzler.com.au</a><br>
                  จีน
                  <a href="www.sizzler.com.cn" style="color: black;">www.sizzler.com.cn</a><br>
                  เกาหลี
                  <a href="www.sizzler.co.kr" style="color: black;">www.sizzler.co.kr</a><br>
                  สิงคโปร์
                  <a href="www.sizzler.com.sg" style="color: black;">www.sizzler.com.sg</a><br>
                  ญี่ปุ่น
                  <a href="www.sizzler.jp" style="color: black;">www.sizzler.jp</a><br>
                  ไต้หวัน
                  <a href="www.sizzler.com.tw" style="color: black;">www.sizzler.com.tw</a><br>
                </b>
             -->

          <!--<a href="location.html">
            <button type="button" name="button" class="phoinikas--btn-design-1"></button>
          </a> -->
        </div>
        @endif

			</article>

			@include('layouts.widgets.map')
		</div>

	</main>


@endsection

