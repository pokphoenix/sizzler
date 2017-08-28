@extends('layouts.app')

@section('content')
<main class="phoinikas--body-main phoinikas--page-about">
		<div class="phoinikas--wrapper phoinikas--wrapper-global">
			<article class="phoinikas--content">
				@if (App::getLocale()=='th') 
				<div class="phoinikas--content-wrapper">
					<h2>เกี่ยวกับซิซซ์เล่อร์</h2>
					<p>
						ซิซซ์เล่อร์เป็นร้านอาหารประเภทสเต็ก ซีฟู๊ด และสลัด สไตล์ตะวันตก มีสาขาอยู่ทั่วโลก โดย มร. เดล จอห์นสัน และภรรยา เฮเลน ก่อตั้งสาขาแรกขึ้นที่เมืองคลูเวอร์ รัฐแคลิฟอร์เนีย สหรัฐอเมริกาใน พ.ศ. 2501 สำหรับชื่อซิซซ์เล่อร์ มีที่มาจากเสียง "ฉ่า" ของสเต็ก เมื่อเสิร์ฟบนกะทะร้อน
					</p>
					<p>
						ใน พ.ศ. 2509 มร. จอห์นสัน ได้เสนอขายกิจการร้านซิซซ์เล่อร์ ให้กับ มร. จิมคอลลินส์ ซึ่งภายหลังกลายเป็นเจ้าของกิจการแฟรนไชส์ที่ใหญ่ที่สุดของธุรกิจฟาสต์ฟู้ดในฝั่งตะวันตกของสหรัฐอเมริกา
					</p>
					<p>
						ใน พ.ศ. 2528 ซิซซ์เล่อร์ได้ขยายธุรกิจไปถึงประเทศออสเตรเลีย โดยการดำเนินงานของ บริษัท คอลลินส์ ฟู้ด สาขาแรกตั้งอยู่ที่เมืองแอนเนอร์เลย์ รัฐควีนส์แลนด์ ก่อนที่จะขยายสาขากระจายไปทั่วรัฐควีนส์แลนด์ นิวเซาท์เวลล์ ออสเตรเลียเหนือ และออสเตรเลียตะวันตกในปัจจุบัน
					</p>
					<p>
						สำหรับในประเทศไทย บริษัท เอส แอล อาร์ ที จำกัด ในเครือบริษัท เดอะ ไมเนอร์ ฟู้ด กรุ๊ป จำกัด (มหาชน) ได้นำ "ซิซซ์เลอร์" เข้ามาในประเทศไทยและเปิดสาขาแรกที่ อาคารฟิฟฟ์ตี้ฟิฟฟ์ พลาซ่า (Fifty Fifth Plaza) สุขุมวิท 55 (ปิดบริการแล้ว) ใน พ.ศ. 2535 และได้ขยายสาขาเพิ่มขึ้นอย่างต่อเนื่อง
					</p>
					<p>
						โดยทุกสาขาของซิซซ์เล่อร์ในประเทศไทย ดำเนินงานตามหลักการของซิซซ์เลอร์ทั่วโลกที่มีมาตราฐานเดียวกัน โดยมีอาหารหลายชนิดให้เลือกทั้งสเต็กเนื้อ ไก่ หมู อาหารทะเลทั้งทอดและย่าง รวมทั้งสลัดบาร์ที่ใหญ่ที่สุด ซึ่งมีทั้งผักสดๆ ซุป และพาสต้า ให้เลือกมากมาย และสามารถเติมได้ไม่จำกัด พร้อมทั้งของหวานและผลไม้ครบครัน
					</p>
					<a href=" {{ url($lang.'location') }} ">
						<button type="button" name="button" class="phoinikas--btn-design-1">สาขาทั้งหมด</button>
					</a>
				</div>


				@else
				<div class="phoinikas--content-wrapper">
					<h2>History of Sizzler</h2>
					<p>
            Sizzler, the global franchise, western - style restaurant was first opened in Culver City, California on January 27,
            1958 by pioneering restaurateurs Del and Helen Johnson, The name 'Sizzler' comes from 'sizzle' sound of steak on the hot plate.
					</p>
					<p>
            In late 1966, Del and Helen decided to retire and sold their Sizzler business to Jim Collins,
            who later became the largest fast food franchiser on the US's West Coast.
					</p>
					<p>
            In 1985, Collins Foods International, controlling the Sizzler franchise, moved <br>
            the brand into the Australian market with its first location in Annerley, a suburb <br>
            of Brisbane, before expanding throughout Queensland, New South Wales,<br>
             and North and West Australia.
          			</p>
					<p>
            In Thailand, the Sizzler franchise is handled by SLRT Limited, a subsidiary <br>
            of <b><a href="http://career.minorfood.com/" target="" style="color:#004e2a;">The Minor Food Group</a></b> Plc, one of Thailand's most successful restaurant operators.
					</p>
					<p>
            The first location opened on January 9, 1992 on the 2nd floor of the Fifty Fifth Plaza, Sukhumvit 55, Bangkok (Closed store).Later, Sizzler Thailand expanded into <br>
            48 restaurants with 29 in Bangkok Metropolitan Region and 19 in major provinces. <b><a href="http://sizzler.phoinikasdigital.com/en/location.html" target="_blank" style="color:#004e2a;">Click here</a></b> for Sizzler locations.
					</p>
          			<p>
            SLRT Limited follows the successful recipes of Sizzler worldwide. The Sizzler menu features, not only a healthy variety of freshly prepared steaks and seafood but also delicious chicken dishes, combination meals, burgers and the famous unlimited soup, salad, pasta, fruit and dessert bars.
          			</p>
					<a href=" {{ url($lang.'location') }} ">
						<button type="button" name="button" class="phoinikas--btn-design-1">All Branches</button>
					</a>
				</div>
				@endif
			</article>

			@include('layouts.widgets.map')
		</div>

	</main>
@endsection