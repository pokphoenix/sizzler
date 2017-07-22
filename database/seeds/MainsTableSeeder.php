<?php

use Illuminate\Database\Seeder;

class MainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categorys')->delete();
		\DB::table('categorys')->insert(array (
			0 => 
			array (
				'name_th' => 'หมู',
				'name_en' => 'pork',
				'thumbnail_th' => '201707/1499348084_c3.jpg',
				'thumbnail_en' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'name_th' => 'ไก่',
				'name_en' => 'chicken',
				'thumbnail_th' => '201707/1499348065_Line-up.jpg',
				'thumbnail_en' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			2 => 
			array (
				'name_th' => 'ทะเล',
				'name_en' => 'seafood',
				'thumbnail_th' => '201707/1499348057_IMG_0640.PNG',
				'thumbnail_en' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			3 => 
			array (
				'name_th' => 'เนื้อ',
				'name_en' => 'beef',
				'thumbnail_th' => '201707/1499347640_b01.jpg',
				'thumbnail_en' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			4 => 
			array (
				'name_th' => 'เบอเกอ',
				'name_en' => 'burger',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			5 => 
			array (
				'name_th' => 'อาหารสำหรับเด็ก',
				'name_en' => 'kid menu',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			6 => 
			array (
				'name_th' => 'เมนูผสมเนือ',
				'name_en' => 'combination beef',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			7 => 
			array (
				'name_th' => 'เมนูผสม',
				'name_en' => 'combination suprem',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			8 => 
			array (
				'name_th' => 'เมนูจานใหญ่',
				'name_en' => 'combination platter',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));

		\DB::table('healthtip')->delete();
		\DB::table('healthtip')->insert(array (
			0 => 
			array (
				'url' => '',
				'title_th' => 'มารู้จักวิธีเลือกน้ำสลัดให้ถูกต้อง',
				'title_en' => 'มารู้จักวิธีเลือกน้ำสลัดให้ถูกต้อง',
				'thumbnail_th' => '201707/1500113944_a1-1.jpg',
				'thumbnail_en' => '',
				'short_description_th' => 'น้ำสลัด (Dressing) คือ น้ำปรุงรสหรือซอสสำหรับใส่ในสลัด เพื่อเพิ่มรสชาติ ซึ่งเราสามารถแบ่งน้ำสลัดออกเป็น 2 ประเภทใหญ่ๆ คือ สลัดน้ำข้น และสลัดน้ำใส',
				'short_description_en' => '',
				'text_th' => '<h3>มารู้จักวิธีเลือกน้ำสลัดให้ถูกต้อง</h3>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้ำสลัด (Dressing)&nbsp;คือ น้ำปรุงรสหรือซอสสำหรับใส่ในสลัด เพื่อเพิ่มรสชาติ ซึ่งเราสามารถแบ่งน้ำสลัดออกเป็น 2 ประเภทใหญ่ๆ คือ สลัดน้ำข้น และสลัดน้ำใส</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สลัดน้ำข้น เป็นน้ำสลัดที่ให้พลังงานสูง ประกอบไปด้วยโปรตีนและไขมัน เหมาะกับผู้ที่ต้องการพลังงานสูงอย่าง นักกีฬา หรือผู้ที่ต้องการเพิ่มน้ำหนัก แต่ไม่เหมาะสำหรับคนที่กำลังควบคุมน้ำหนัก เพราะอาจทำให้ปริมาณคอเลสเตอรอลสูงได้<br />
<br />
1. น้ำสลัดครีม: ปริมาณ 1 ช้อนโต๊ะ ให้พลังงาน 70-100 กิโลแคลอรี ส่วนผสมหลักคือไข่แดง ซึ่งถือเป็นแหล่งโปรตีน ช่วยบำรุงผิว ผม และเล็บ ไม่เหมาะสำหรับผู้ป่วยโรคหัวใจ โรคอ้วน ควรเลือกบริโภคคู่กับสลัดที่มีเนื้อสัตว์ไขมันต่ำอย่างเนื้อทูน่าในน้ำแร่ อกไก่ฉีก เป็นต้น<br />
<br />
2. น้ำสลัดเทาซันไอส์แลนด์: ปริมาณ&nbsp;1 ช้อนโต๊ะ ให้พลังงาน 80 กิโลแคลอรี ส่วนผสมหลักๆ คล้ายน้ำสลัดครีม แต่ปริมาณน้ำมันและไข่แดงน้อยกว่า และมีการเติมมะเขือเทศลงไป จึงมีไลโคปีนจากมะเขือเทศ ให้พลังงานสูง และมีปริมาณโซเดียมสูง ควรรับประทานคู่กับเนื้อสัตว์ไขมันต่ำ<br />
<br />
3. น้ำสลัดซีซาร์: ปริมาณ 1 ช้อนโต๊ะ ให้พลังงานประมาณ 68 กิโลแคลอรี น้ำสลัดซีซาร์เป็นน้ำสลัดแบบครีม สัญชาติอิตาลี มีลักษณะเป็นสีขาวข้น มักรับประทานคู่กับผักกาดแก้ว ผักกาดหอมคอส เห็ดฟาง โรยด้วยเบคอนและขนมปังกรูตอง (ขนมปังเนยอบกรอบเป็นชิ้นเล็กๆ) และ พาเมซานชีส<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สลัดน้ำใสเหมาะกับผู้ที่มีปัญหาด้านสุขภาพ เช่น คนเป็นเบาหวาน โรคหัวใจ ความดันโลหิตสูง และโรคอ้วน เพราะมีส่วนผสมของเกลือและน้ำตาลที่น้อยกว่า หากรับประทานในปริมาณพอเหมาะ จะช่วยลดการเกิดโคเลสเตอรอลในเส้นเลือดได้<br />
<br />
1.&nbsp;น้ำสลัดงา (โชยุ): ปริมาณ 1 ช้อนโต๊ะ ให้พลังงานประมาณ 55&nbsp;กิโลแคลอรี น้ำสลัดญี่ปุ่นมีความหอม ช่วยเจริญอาหาร น้ำมันงามีกรดไพติก ช่วยในการยับยั้งการเกิดมะเร็งลำไส้ และเมื่อราดบนผักสลัดจะช่วยในการดูดซึมธาตุเหล็กได้ดีขึ้น ผักสลัดที่นิยมรับประทานคู่กัน ได้แก่ ผักกาดแก้ว มะเขือเทศ แตงกวาญี่ปุ่น วอเตอร์เครส เป็นต้น<br />
<br />
&nbsp; 2. น้ำสลัดอิตาเลียน: ปริมาณ 1 ช้อนโต๊ะ ให้พลังงานประมาณ 43 กิโลแคลอรี เหมาะสำหรับผู้ที่ควบคุมอาหาร และดูแลสุขภาพ เพราะให้พลังงานน้อย และมีปริมาณส่วนผสมหลักที่มีประโยชน์ เช่น น้ำมันมะกอก น้ำมะนาว กระเทียม หัวหอม บางสูตรอาจเติมพริกไทยดำและใบโหระพาสับ เพิ่มความร้อนแรง<br />
<br />
&nbsp;3. น้ำสลัดฝรั่งเศส: ปริมาณ 1 ช้อนโต๊ะ ให้พลังงานประมาณ 73 กิโลแคลอรี น้ำสลัดแบบฝรั่งเศสถือว่าเป็นทางเลือกที่ดีอีกทางหนึ่งของผู้ที่ต้องการควบคุมน้ำหนัก เพราะมีปริมาณไขมันไม่สูงนัก นิยมทานคู่กับผักกาดแก้วสดกรอบ เนื้ออกไก่ หรือเนื้อปลา ช่วยให้เจริญอาหาร&nbsp;แถมยังไม่เลี่ยนจนเกินไป<br />
<br />
&nbsp; 4. น้ำสลัดบัลซามิค: ปริมาณ 1 ช้อนโต๊ะ ให้พลังงานประมาณ 15 กิโลแคลอรี ส่วนผสมสำคัญ ได้แก่ น้ำ น้ำส้มสายชูบัลซามิค น้ำมะเขือเทศบด เกลือและน้ำมันมะกอก น้ำสลัดชนิดนี้เหมาะสำหรับผู้ที่ชื่นชอบมะเขือเทศ นิยมรับประทานคู่กับมะเขือเทศผลใหญ่หรือมะเขือเทศเชอร์รี่จะเข้ากันได้ดี ให้รสชาติเปรี้ยวอมหวาน เพิ่มความอร่อยมากขึ้น</p>',
				'text_en' => '',
				'status' => 1,
				'position' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'url' => '',
				'title_th' => 'กินดี รู้สึกดีดี อาหารคลีน  มีประโยชน์อย่างไร',
				'title_en' => 'กินดี รู้สึกดีดี อาหารคลีน  มีประโยชน์อย่างไร',
				'thumbnail_th' => '201707/1500176651_a2-2.jpg',
				'thumbnail_en' => '',
				'short_description_th' => 'การรับประทานอาหารคลีนเป็นสิ่งที่ง่ายที่สุดที่จะนำไปสู่ชีวิตที่มีสุขภาพดี การรับประทานอาหารคลีนคือสิ่งพื้นฐาน ที่ไม่ใช่การควบคุมอาหารตามกระแส',
				'short_description_en' => '',
				'text_th' => '<h3>กินดี รู้สึกดีดี อาหารคลีน<br />
มีประโยชน์อย่างไร</h3>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การรับประทานอาหารคลีนเป็นสิ่งที่ง่ายที่สุดที่จะนำไปสู่ชีวิตที่มีสุขภาพดี การรับประทานอาหารคลีนคือสิ่งพื้นฐาน ที่ไม่ใช่การควบคุมอาหารตามกระแส ประโยชน์ของอาหารคลีน คือ</p>

<p>1. ให้ความรู้สึกที่ดีขึ้น<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การรับประทานอาหารเพื่อสุขภาพจะทำให้รู้สึกดีขึ้น ซึ่งส่วนใหญ่ประกอบไปด้วย ผัก ผลไม้ และโปรตีนไขมันต่ำซึ่งส่วนประกอบเหล่านี้จะสร้างพลังในตัวที่สมดุลและทำให้คุณรู้สึกดีตลอดทั้งวัน สมองปลอดโปร่ง<br />
<br />
2. รักษาน้ำหนักเพื่อสุขภาพ<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การรับประทานอาหารเพื่อสุขภาพเป็นหนทางที่ดีที่สุดในการควบคุมน้ำหนัก โดยไม่ต้องกังวล นอกจากนี้การออกกำลังกายจะทำให้มีประสิทธิภาพมากยิ่งขึ้นร่วมกับการรับประทานอาหารคลีน<br />
<br />
3. สร้างระบบภูมิคุ้มกันที่ดีขึ้น<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาหารที่มีประโยชน์ช่วยป้องกันโรคโดยการสร้างระบบภูมิคุ้มกันที่แข็งแกร่งและลำไส้ การสร้างระบบภูมิคุ้มกันของคุณด้วยอาหารที่ดีต่อสุขภาพช่วยให้สามารถที่จะต่อสู้กับความเจ็บป่วยตามธรรมชาติและฟื้นตัวได้อย่างรวดเร็ว โดยการรับประทานอาหารที่อุดมสมบูรณ์เช่น ผลไม้ ผัก&nbsp;รวมถึงอาหารหมัก โยเกิร์ต และน้ำ 8-10 แก้วต่อวัน<br />
<br />
4. รับรู้จิตใจ<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การรับประทานอาหารที่ดีต่อสุขภาพทั้งอาหารที่มีไขมันเพื่อสุขภาพปริมาณที่สูง (โอเมก้า 3 กรดไขมัน) จะทำให้สมองทำงานได้ดีขึ้น&nbsp; สมองต้องการสารอาหารที่เหมาะสม เช่น โปรตีน ไขมันที่ดีต่อสุขภาพและน้ำตาลบางประเภทเพื่อการทำงานอย่างมีประสิทธิภาพ&nbsp;<br />
<br />
5. ระดับพลังงานในตัวที่เพิ่มขึ้น<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเพิ่มระดับพลังงานในตัวที่มีประสิทธิภาพ คือการรับประทานอาหารให้ช้าลงเพื่อที่จะมีการปล่อยระดับน้ำตาลในปริมาณที่เหมาะสม ทำได้โดยการรวมโปรตีนและเส้นใย อย่างเช่น&nbsp; ข้าวโอ้ต และผลไม้&nbsp; โยเกิร์ต และผลไม้ ชีส และ แครกเกอร์ แอปเปิ้ลและเนยถั่ว ชีสกับผัก หรือ ครีมกับผัก เป็นต้น<br />
<br />
6. การพักผ่อนที่ดีกว่า<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วิตามินและแร่ธาตุที่พบในอาหาร นอกจากจะช่วยให้ร่างกายของคุณสามารถควบคุมการทำงานของฮอร์โมนตลอดทั้งวัน ยังส่งเสริมการนอนหลับในเวลากลางคืนได้ดีอีกด้วย การรับประทานอาหารเพื่อสุขภาพจะทำให้ระบบประสาททำงานอย่างเป็นปกติและกระตุ้นการตอบสนองของฮอร์โมนที่ช่วยให้คุณพักผ่อนได้ดีในเวลากลางคืน<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พร้อมที่จะรู้สึกได้รับประโยชน์จากการรับประทานเพื่ออาหารสุขภาพแล้วหรือยัง</p>',
				'text_en' => '',
				'status' => 1,
				'position' => '2',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			2 => 
			array (
				'url' => '',
				'title_th' => 'เช็กลิสต์“อาการ”ออฟฟิศซินโดรม “เป็นน้อย” หรือ “เป็นหนัก” ต้องรักษา?',
				'title_en' => 'เช็กลิสต์“อาการ”ออฟฟิศซินโดรม “เป็นน้อย” หรือ “เป็นหนัก” ต้องรักษา?',
				'thumbnail_th' => '201707/1500176848_a3-2.jpg',
				'thumbnail_en' => '',
				'short_description_th' => 'วิธีปฏิบัติตัวเพื่อหลีกเลี่ยงอาการออฟฟิศซินโดรม ทำได้ง่ายมาก โดยหลักการคือควรมีการลุกหรือเคลื่อนไหวร่างกายทุกๆ ครึ่งชั่วโมงก็ช่วยได้แล้ว',
				'short_description_en' => '',
				'text_th' => '<h3>เช็กลิสต์&ldquo;อาการ&rdquo;ออฟฟิศซินโดรม<br />
&ldquo;เป็นน้อย&rdquo; หรือ &ldquo;เป็นหนัก&rdquo;<br />
ต้องรักษา?</h3>

<p>&nbsp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วิธีปฏิบัติตัวเพื่อหลีกเลี่ยงอาการออฟฟิศซินโดรม ทำได้ง่ายมาก โดยหลักการคือควรมีการลุกหรือเคลื่อนไหวร่างกายทุกๆ ครึ่งชั่วโมงก็ช่วยได้แล้ว</p>

<p>&nbsp;</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อย่างไรก็ดี ด้วยภาระงานที่ยังต้องทำต่อไป ก็อาจเป็นข้อจำกัดในการเคลื่อนไหวร่างกาย จนทำให้เกิดอาการได้ ซึ่งในทางวิชาการแล้ว ออฟฟิศซินโดรม แบ่งออกเป็น 3 ระดับ ซึ่งประชาชนทั่วไปสามารถสังเกตเบื้องต้นด้วยตัวเองว่าอาการเจ็บปวดที่เกิดขึ้นอยู่ในระดับไหนแล้ว</p>

<p>&nbsp;&nbsp;&nbsp;ระดับที่ 1&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีอาการปวดเมื่อยเกิดขึ้นเมื่อทำงานไประยะหนึ่ง แต่พักแล้วดีขึ้นทันที แนวทางแก้ไขคือ การพักสลับทำงานเป็นระยะๆ การยืดกล้ามเนื้อเพื่อผ่อนคลาย การนวดเพื่อผ่อนคลาย และการออกกำลังกาย &nbsp;&nbsp;<br />
&nbsp;&nbsp;<br />
&nbsp;ระดับที่ 2&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีอาการเกิดขึ้น แม้จะพักผ่อนนอนหลับแล้ว แต่ยังคงมีอาการอยู่ อาจจำเป็นต้องปรับเปลี่ยนพฤติกรรมการทำงานหรือรับการรักษาที่ถูกต้อง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
<br />
&nbsp;ระดับที่ 3&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีอาการปวดอย่างมากแม้ทำงานเพียงเบาๆ พักแล้วอาการก็ยังไม่ทุเลาลง หากมีอาการระดับนี้ จำเป็นต้องพักงานปรับเปลี่ยนงานและรับการรักษาที่ถูกต้อง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ldquo;วิธีสังเกตอาการว่าเป็นมากหรือน้อย สมมุตินั่งทำงานอยู่แล้วปวด แต่พอลุกเดินไปทำกิจกรรมอื่น เช่น ไปเข้าห้องน้ำ ไปชงกาแฟ แล้วหายปวด แบบนี้อยู่ในระยะเริ่มแรก แปลว่าคุณดูแลตัวเองได้ ยังไม่ถึงขั้นต้องไปหาหมอ แต่พอเป็นถึงระดับ 2-3 คุณเริ่มต้องการคำแนะนำหรือต้องไปพบแพทย์แล้ว ระดับ 2 อาจต้องมาพบแพทย์เพื่อขอคำแนะนำ ทำการรักษา 1-2 ครั้งแล้วกลับไปทำต่อที่บ้าน แต่ถ้าระดับ 3 จำเป็นต้องรักษาอย่างต่อเนื่อง&rdquo; ทั้งนี้เมื่อมีอาการเกิดขึ้น แม้ไม่ถึงขั้นต้องรักษาด้วยเครื่องมือหรือตัวยา ก็ควรมาพบแพทย์เพื่อขอคำปรึกษาอย่างน้อยเพื่อตรวจสอบว่าอาการที่เกิดขึ้นเกิดจากกล้ามเนื้อและกระดูกจริงๆ หรือเกิดจากภาวะซ่อนเร้นอื่นๆ เช่น ปลายประสาท หรือผิดปกติของกระดูก เพื่อจะได้วิเคราะห์ต้นเหตุได้อย่างถูกต้องต่อไป&nbsp;<br />
<br />
ที่มา : โดย MGR Online<br />
http://www.manager.co.th/GoodHealth/ViewNews.aspx?NewsID=9590000104494</p>',
				'text_en' => '',
				'status' => 1,
				'position' => '3',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));


		\DB::table('images')->delete();
		\DB::table('images')->insert(array (
			0 => 
			array (
				'image' => '201707/1500176443_a1-3.jpg',
				'healthtip_id' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'image' => '201707/1500176443_a1-4.jpg',
				'healthtip_id' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			2 => 
			array (
				'image' => '201707/1500176848_a3-2.jpg',
				'healthtip_id' => 4,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			3 => 
			array (
				'image' => '201707/1500176848_a3-3.jpg',
				'healthtip_id' => 4,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			4 => 
			array (
				'image' => '201707/1500176848_a3-4.jpg',
				'healthtip_id' => 4,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));
		
		\DB::table('media_categorys')->delete();
		\DB::table('media_categorys')->insert(array (
			0 => 
			array (
				'name_th' => 'TVC',
				'name_en' => 'TVC',
				'thumbnail_th' => '201707/1500189077_icon-play.png',
				'thumbnail_en' => '201707/1500189077_icon-play.png',
				'status' => 1,
				'position' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));

		\DB::table('medias')->delete();
		\DB::table('medias')->insert(array (
			0 => 
			array (
				'url' => 'VPyK0m-pRSg',
				'name_th' => 'เนื้อย่าง',
				'name_en' => 'เนื้อย่าง',
				'thumbnail_th' => '201707/1500189208_img-tvc-1.jpg',
				'thumbnail_en' => '',
				'media_category_id' => 1,
				'status' => 1,
				'position' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'url' => 'VPyK0m-pRSg',
				'name_th' => 'หมูย่าง',
				'name_en' => 'หมูย่าง',
				'thumbnail_th' => '201707/1500189208_img-tvc-2.jpg',
				'thumbnail_en' => '',
				'media_category_id' => 1,
				'status' => 1,
				'position' => 2,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			2 => 
			array (
				'url' => 'VPyK0m-pRSg',
				'name_th' => 'ปิ้งย่าง',
				'name_en' => 'ปิ้งย่าง',
				'thumbnail_th' => '201707/1500189208_img-tvc-3.jpg',
				'thumbnail_en' => '',
				'media_category_id' => 1,
				'status' => 1,
				'position' => 3,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));

		\DB::table('menus')->delete();
		\DB::table('menus')->insert(array (
			0 => 
			array (
				'name_th' => 'n1',
				'name_en' => 'n1',
				'img_th' => '201707/1499953239_img-beef-2.jpg',
				'img_en' => '',
				'category_id' => 4,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			1 => 
			array (
				'name_th' => 'n2',
				'name_en' => 'n2',
				'img_th' => '201707/1499953239_img-beef-3.jpg',
				'img_en' => '',
				'category_id' => 4,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			2 => 
			array (
				'name_th' => 'n3',
				'name_en' => 'n3',
				'img_th' => '201707/1499953239_img-beef-4.jpg',
				'img_en' => '',
				'category_id' => 4,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			3 => 
			array (
				'name_th' => 'n4',
				'name_en' => 'n4',
				'img_th' => '201707/1499953239_img-beef-5.jpg',
				'img_en' => '',
				'category_id' => 4,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			4 => 
			array (
				'name_th' => 'p1',
				'name_en' => 'p1',
				'img_th' => '201707/1499954455_img-pork-2.jpg',
				'img_en' => '',
				'category_id' => 1,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			5 => 
			array (
				'name_th' => 'p2',
				'name_en' => 'p2',
				'img_th' => '201707/1499954455_img-pork-3.jpg',
				'img_en' => '',
				'category_id' => 1,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			6 => 
			array (
				'name_th' => 'p3',
				'name_en' => 'p3',
				'img_th' => '201707/1499954455_img-pork-4.jpg',
				'img_en' => '',
				'category_id' => 1,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			7 => 
			array (
				'name_th' => 'p4',
				'name_en' => 'p4',
				'img_th' => '201707/1499955026_img-pork-5.jpg',
				'img_en' => '',
				'category_id' => 1,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			8 => 
			array (
				'name_th' => 'p1',
				'name_en' => 'p1',
				'img_th' => '201707/1499955120_img-seafood-1.jpg',
				'img_en' => '',
				'category_id' => 3,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			9 => 
			array (
				'name_th' => 'p2',
				'name_en' => 'p2',
				'img_th' => '201707/1499955120_img-seafood-3.jpg',
				'img_en' => '',
				'category_id' => 3,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			10 => 
			array (
				'name_th' => 'p3',
				'name_en' => 'p3',
				'img_th' => '201707/1499955120_img-seafood-4.jpg',
				'img_en' => '',
				'category_id' => 3,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			11 => 
			array (
				'name_th' => 'p4',
				'name_en' => 'p4',
				'img_th' => '201707/1499955120_img-seafood-5.jpg',
				'img_en' => '',
				'category_id' => 3,
				'created_at' => '2017-07-13 13:40:39',
				'updated_at' => '2017-07-13 13:40:39'
			),
			12 => 
			array (
				'name_th' => 'b1',
				'name_en' => 'b1',
				'img_th' => '201707/1499955418_img-burger-1.jpg',
				'img_en' => '',
				'category_id' => 5,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			13 => 
			array (
				'name_th' => 'b2',
				'name_en' => 'b2',
				'img_th' => '201707/1499955418_img-burger-1.jpg',
				'img_en' => '',
				'category_id' => 5,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			14 => 
			array (
				'name_th' => 'b3',
				'name_en' => 'b3	',
				'img_th' => '201707/1499955418_img-burger-1.jpg',
				'img_en' => '',
				'category_id' => 5,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			15 => 
			array (
				'name_th' => 'k1',
				'name_en' => 'k1',
				'img_th' => '201707/1499957441_img-kid-4.jpg',
				'img_en' => '',
				'category_id' => 6,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			16 => 
			array (
				'name_th' => 'k2',
				'name_en' => 'k2',
				'img_th' => '201707/1499957441_img-kid-3.jpg',
				'img_en' => '',
				'category_id' => 6,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			17 => 
			array (
				'name_th' => 'k3',
				'name_en' => 'k3',
				'img_th' => '201707/1499957441_img-kid-2.jpg',
				'img_en' => '',
				'category_id' => 6,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			18 => 
			array (
				'name_th' => 'k4',
				'name_en' => 'k4',
				'img_th' => '201707/1499957441_img-kid-6.jpg',
				'img_en' => '',
				'category_id' => 6,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			19 => 
			array (
				'name_th' => 'k5',
				'name_en' => 'k5',
				'img_th' => '201707/1499957441_img-kid-5.jpg',
				'img_en' => '',
				'category_id' => 6,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			20 => 
			array (
				'name_th' => 'c1',
				'name_en' => 'c1',
				'img_th' => '201707/1499958148_img-chicken-1.jpg',
				'img_en' => '',
				'category_id' => 2,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			21 => 
			array (
				'name_th' => 'c2',
				'name_en' => 'c2',
				'img_th' => '201707/1499958148_img-chicken-2.jpg',
				'img_en' => '',
				'category_id' => 2,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			22 => 
			array (
				'name_th' => 'c3',
				'name_en' => 'c3',
				'img_th' => '201707/1499958148_img-chicken-3.jpg',
				'img_en' => '',
				'category_id' => 2,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
			23 => 
			array (
				'name_th' => 'c4',
				'name_en' => 'c4',
				'img_th' => '201707/1499958148_img-chicken-4.jpg',
				'img_en' => '',
				'category_id' => 2,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
		));

		\DB::table('promotion')->delete();
		\DB::table('promotion')->insert(array (
			0 => 
			array (
				'name_th' => 'โปรโมชั่น  AIS',
				'name_en' => 'Promotion AIS',
				'img_th' => '201707/1500188010_promotion-ais.jpg',
				'img_en' => '',
				'status' => 1,
				'position' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));

		\DB::table('promotion-banner')->delete();
		\DB::table('promotion-banner')->insert(array (
			0 => 
			array (
				'url' => 'wednesday',
				'name_img_th_1' => 'wednesday',
				'name_img_en_1' => 'wednesday',
				'img_th_1' => '201707/1500090542_banner-wednesday-1.png',
				'img_en_1' => '',
				'name_img_th_2' => 'wednesday',
				'name_img_en_2' => 'wednesday',
				'img_th_2' => '201707/1500090542_banner-wednesday-1.png',
				'img_en_2' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));

		\DB::table('promotion-slider')->delete();
		\DB::table('promotion-slider')->insert(array (
			0 => 
			array (
				'url' => 'menu-lunch',
				'name_th' => 'menu-lunch',
				'name_en' => 'menu-lunch',
				'img_th' => '201707/1500094131_slide-1.jpg',
				'img_en' => '',
				'status' => 1,
				'position' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'url' => 'menu-lunch',
				'name_th' => 'menu-lunch',
				'name_en' => 'menu-lunch',
				'img_th' => '201707/1500094131_slide-1.jpg',
				'img_en' => '',
				'status' => 1,
				'position' => 2,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));


		\DB::table('banners')->delete();
		\DB::table('banners')->insert(array (
			0 => 
			array (
				'url' => 'wednesday',
				'name_img_th_1' => 'wednesday',
				'name_img_en_1' => 'wednesday',
				'img_th_1' => '201707/1500090542_banner-wednesday-1.png',
				'img_en_1' => '',
				'name_img_th_2' => 'wednesday',
				'name_img_en_2' => 'wednesday',
				'img_th_2' => '201707/1500090542_banner-wednesday-1.png',
				'img_en_2' => '',
				'status' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));

		\DB::table('slidersub')->delete();
		\DB::table('slidersub')->insert(array (
			0 => 
			array (
				'url' => 'menu-lunch',
				'name_th' => 'menu-lunch',
				'name_en' => 'menu-lunch',
				'img_th' => '201707/1500094131_slide-1.jpg',
				'img_en' => '',
				'status' => 1,
				'position' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'url' => 'menu-lunch',
				'name_th' => 'menu-lunch',
				'name_en' => 'menu-lunch',
				'img_th' => '201707/1500094131_slide-1.jpg',
				'img_en' => '',
				'status' => 1,
				'position' => 2,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));

		\DB::table('slider')->delete();
		\DB::table('slider')->insert(array (
			0 => 
			array (
				'url' => 'beef',
				'name_th' => 'beef',
				'name_en' => 'beef',
				'img_th' => '201707/1500107790_feature_slide-1.jpg',
				'img_en' => '',
				'status' => 1,
				'position' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'url' => 'salad',
				'name_th' => 'salad',
				'name_en' => 'salad',
				'img_th' => '201707/1500107890_feature_slide-2.jpg',
				'img_en' => '',
				'status' => 1,
				'position' => 3,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			2 => 
			array (
				'url' => 'pork',
				'name_th' => 'pork',
				'name_en' => 'pork',
				'img_th' => '201707/1500107839_feature_slide-3.jpg',
				'img_en' => '',
				'status' => 1,
				'position' => 2,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			3 => 
			array (
				'url' => 'chicken',
				'name_th' => 'chicken',
				'name_en' => 'chicken',
				'img_th' => '201707/1500107910_feature_slide-4.jpg',
				'img_en' => '',
				'status' => 1,
				'position' => 4,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));


	
		\DB::table('location')->delete();
		\DB::table('location')->insert(array (
			0 => array ('province_id'=> 1, 'name_th' => 'ซีพี ทาวเวอร์ ', 'address_th' => 'เลขที่ 313  ชั้น 2 อาคารซีพี ทาวเวอร์  ถนนสีลม  แขวงสีลม  เขตบางรัก กทม. 10500', 'name_en' => 'C.P Tower', 'address_en' => 'CP Tower 2nd Floor, Silom Road, Bangrak, Bangkok 10500', 'tel' => '061-421-1840', 'lat' => '13.7461738', 'lng' => '100.5377945'  ,'status'=> 1,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21' ),
	        1 => array ('province_id'=> 1, 'name_th' => 'เซ็นทรัล บางนา', 'address_th' => 'เลขที่ 1091 ชั้น 5 ห้องเลขที่ 551  ศูนย์การค้าเซ็นทรัลซิตี้บางนา','name_en' => 'Central Bangna', 'address_en' => 'Central City Bangna, 5th Floor Bangna-Trad Road, Bangna, Bangkok 10260', 'tel' => '061-421-1873', 'lat' => '13.669563', 'lng' => '100.6321113'  ,'status'=> 1,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21' ),
	        2 => array ('province_id'=> 1, 'name_th' => 'เซ็นทรัล พระราม 3', 'address_th' => 'เลขที่ 79/248-249 ชั้น 5 ห้องเลขที่ 535-536 ศูนย์การค้าเซ็นทรัลพระราม 3','name_en' => 'Central Rama 3', 'address_en' => 'Central Rama 3, 5th Floor Sathupradit Road, Chongnonsee, Yannawa, Bangkok 10120', 'tel' => '061-421-1874', 'lat' => '13.6978897', 'lng' => '100.535386'  ,'status'=> 1,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21' ),
	        3 => array ('province_id'=> 1, 'name_th' => 'เดอะมอลล์ บางกะปิ', 'address_th' => 'เลขที่ 3522  ชั้น 3 ห้างเดอะมอลล์บางกะปิ  ถนนลาดพร้าว, แขวงคลองจั่น', 'name_en' => 'The Mall Bangkapi', 'address_en' => 'The Mall Bangkapi 3rd Fl.Food zone (waterfall zone) Ladprao Road, Klongjan, Bangkapi , Bangkok 10240', 'tel' => '061-421-1890', 'lat' => '13.7658444', 'lng' => '100.6401912'  ,'status'=> 1,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21' ),
	        4 => array ('province_id'=> 1, 'name_th' => 'เซ็นทรัล ลาดพร้าว', 'address_th' => 'ห้องเลขที่ 325 ชั้น 3 เลขที่ 1697 ถนนพหลโยธิน กรุงเทพมหานครฯ  10900', 'name_en' => 'Central Plaza Ladprao', 'address_en' => 'Central Plaza Ladprao, 3rd Floor Paholyothin Road, Ladyao, Jatujak, Bangkok 10900 ', 'tel' => '061-421-1895', 'lat' => '13.8294305', 'lng' => '100.5729696'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        5 => array ('province_id'=> 1, 'name_th' => 'สยามเซ็นเตอร์', 'address_th' => 'เลขที่ 979  ชั้น 4 สยามเซ็นเตอร์  ถนน พระราม1  แขวงปทุมวัน', 'name_en' => 'Siam Center', 'address_en' => 'Siam Center, 4th Floor Rama 1 Road, Pathumwan, Bangkok 10330', 'tel' => '061-421-1908', 'lat' => '13.746461', 'lng' => '100.5293743'  ,'status'=> 1,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21' ),
	        6 => array ('province_id'=> 1, 'name_th' => 'ซีคอนสแควร์', 'address_th' => 'เลขที่ 904 ชั้น 4 ห้างซีคอนสแควร์ หมู่ที่ 6 ถนนศรีนครินทร์ แขวงหนองบอน', 'name_en' => 'Seacon Square', 'address_en' => 'Seacon Square, 4th Floor Srinakarin Road, Pravet, Bangkok 10260', 'tel' => '061-421-1980', 'lat' => '13.6960206', 'lng' => '100.646141'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        7 => array ('province_id'=> 1, 'name_th' => 'มาบุญครอง', 'address_th' => 'เลขที่ 444 ชั้น 7 อาคารมาบุญครองเซ็นเตอร์', 'name_en' => 'MBK Center', 'address_en' => 'MBC Center 7th Floor Pathumwan 10330', 'tel' => '061-421-1982', 'lat' => '13.7444683', 'lng' => '100.5277199'  ,'status'=> 1,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21' ),
	        8 => array ('province_id'=> 1, 'name_th' => 'เมเจอร์ เอกมัย', 'address_th' => 'เลขที่ 1221/39 ห้อง 105A-108A ชั้น G เมเจอร์เอกมัย ถ.สุขุมวิท แขวงคลองตันเหนือ', 'name_en' => 'Major Ekamai', 'address_en' => 'Major Ekamai Ground Floor Sukhumvit Road, Wattana, Bangkok 10110', 'tel' => '061-421-2011', 'lat' => '13.7212299', 'lng' => '100.5810567'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        9 => array ('province_id'=> 1, 'name_th' => 'เมเจอร์ รัชโยธิน', 'address_th' => 'เลขที่ 1839 ห้องเลขที่ 102 เมเจอร์รัชโยธิน ชั้น G ถ.พหลโยธิน  แขวงลาดยาว', 'name_en' => 'Major Ratchayothin', 'address_en' => 'Major Ratchayothin Ground Floor Ladyao, Jatajak, Bangkok 10900', 'tel' => '061-421-2012', 'lat' => '13.8286371', 'lng' => '100.5663187'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        10 => array ('province_id'=> 1, 'name_th' => 'เซ็นทรัล พระราม 2', 'address_th' => 'เลขที่ 128  หมู่ 6 ห้องหมายเลข M10-7 ชั้น 4 อาคารศูนย์การค้าเซ็นทรัล พระราม 2 ', 'name_en' => 'Central Rama 2 ', 'address_en' => 'Central Plaza Rama 2, 4th Floor Rama 2 Road, Bangkhuntien, Bangkok 10150', 'tel' => '061-421-2016', 'lat' => '13.6629123', 'lng' => '100.4352963'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        11 => array ('province_id'=> 1, 'name_th' => 'อเวนิว แจ้งวัฒนะ ', 'address_th' => '104/42 ม.1 ถ.แจ้งวัฒนะ  แขวงทุ่งสองห้อง  เขตหลักสี่  กทม. 10210', 'name_en' => 'The Avenue', 'address_en' => 'The Avenue Plaza, 2nd Floor Changwattana Road, Laksi, Bangkok 10210', 'tel' => '061-421-2024', 'lat' => '13.8977089', 'lng' => '100.5028429'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        12 => array ('province_id'=> 1, 'name_th' => 'แฟชั่นไอส์แลนด์', 'address_th' => '5/5-6 หมู่ 7  ถ.รามอินทรา  แขวงคันนายาว  เขตคันนายาว  กทม. 10230', 'name_en' => 'Fashion Island', 'address_en' => 'Fashion Island, 3rd Floor (near Major Cineplex) Ramindra Road, Bangkok 10230', 'tel' => '061-421-2025', 'lat' => '13.8255986', 'lng' => '100.6767352'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        13 => array ('province_id'=> 3, 'name_th' => 'เซ้นทรัล แจ้งวัฒนะ', 'address_th' => '99  หมู่2  ห้างเซ็นทรัล แจ้งวัฒนะ ชั้น 5  ถ.แจ้งวัฒนะ  ต.บางตลาด  อ.ปากเกร็ด', 'name_en' => 'Central Plaza Chaeng Watthana', 'address_en' => '99 Mu 2 Central Plaza Chaeng Watthana 5th Floor Chaeng Watthana Road, Bang Talat, Pak Kret, Nonthaburi 11120',  'tel' => '061-421-2027', 'lat' => '13.9038717', 'lng' => '100.5254887'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        14 => array ('province_id'=> 1, 'name_th' => 'เดอะมอลล์ บางแค', 'address_th' => '275 ม.1 ห้างเดอะมอลล์ บางแค ชั้น 2 ถ.เพชรเกษม  แขวงบางแคเหนือ เขตบางแค', 'name_en' => 'The Mall Bang Khae', 'address_en' => '275 Mu 1 The Mall Bang Khae 2nd Floor Phet Kasem Road, Bang Khae Nuea, Bang Khae, Bangkok 10160', 'tel' => '061-421-2044', 'lat' => '13.7132183', 'lng' => '100.4057462'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        15 => array ('province_id'=> 1, 'name_th' => 'เซ็นทรัล ปิ่นเกล้า', 'address_th' => '7/492-494  ศูนย์การค้าเซ็นทรัล ปิ่นเกล้า ชั้น 5 ถ.บรมราชนนี', 'name_en' => 'Central Plaza Pinklao', 'address_en' => 'CentralPlaza Pinklao, 5th Fl., Borommaratchachonnani Road, Arun Amarin, Bangkok-noi, Bangkok 10700', 'tel' => '061-421-2049', 'lat' => '13.7776274', 'lng' => '100.4737671'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        16 => array ('province_id'=> 1, 'name_th' => 'เดอะมอลล์ ท่าพระ', 'address_th' => '99 ศูนย์การค้าเดอะมอลล์ ท่าพระ ชั้น 4  ถ.เจริญนคร  แขวงบุคคโล  เขตธนบุรี ', 'name_en' => 'The Mall Tha Phra', 'address_en' => '4th Fl. new Food Zone (behind Power Mall) Bukkhalo, Thonburi, Bangkok 10600', 'tel' => '061-421-2091', 'lat' => '13.7136352', 'lng' => '100.4778851'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        17 => array ('province_id'=> 1, 'name_th' => 'พาราไดร์ พาร์ค', 'address_th' => '61 ศูนย์การค้าพาราไดร์ พาร์ค ชั้น 3 ถ.ศรีนครินทร์  แขวงหนองบอน เขตประเวศ  ', 'name_en' => 'Paradise Park', 'address_en' => '3rd Fl. (near Edutainment Zone) 61 Srinakarin Road, Nongbon, Pravet, Bangkok 10250', 'tel' => '061-421-2113', 'lat' => '13.6876962', 'lng' => '100.645422'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        18 => array ('province_id'=> 1, 'name_th' => 'เซ็นทรัลพระราม 9', 'address_th' => 'Unit#632 ชั้น 6 ศูนย์การค้าเซ็นทรัลพลาซ่า พระราม 9 ','name_en' => 'Central Plaza Grand Rama9', 'address_en' => '6th floor, Central Plaza Rama 9 9/9 Rama9 Rd., Huaykwang Sub-district, Bangkok 10310', 'tel' => '061-421-2174', 'lat' => '13.758439', 'lng' => '100.5639754'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        19 => array ('province_id'=> 1, 'name_th' => 'สยามสแควร์ วัน (SQ 1)', 'address_th' => 'ห้องเลขที่ SS 5001 ชั้น 5 อาคารศูนย์การค้าสยามสแควร์วัน ', 'name_en' => 'Siam Square One', 'address_en' => 'Siam Square One, 5th Floor Rama 1 Road. Pathumwan Bangkok 10330', 'tel' => '061-421-2176', 'lat' => '13.744931', 'lng' => '100.5316716'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        20 => array ('province_id'=> 3, 'name_th' => 'เซ็นทรัล เวสต์เกต', 'address_th' => 'ห้องที่ 356 ชั้น 3 อาคารศูนย์การค้าเซ็นทรัลพลาซ่าเวสต์เกต เลขที่ 199,199/1,199/2 ', 'name_en' => 'Central Plaza Westgate', 'address_en' => 'Unit # 356 , 3rd Floor Central Plaza West Gate 199, 199/1, 199/2 Moo 6, Sao Thonghin Bang Yai, Nonthaburi', 'tel' => '061-421-2185', 'lat' => '13.877375', 'lng' => '100.4099473'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        21 => array ('province_id'=> 1, 'name_th' => 'เดอะ ริเวอร์ไซด์', 'address_th' => 'ห้องเลขที่ 206 เลขที่ 257 ถนนเจริญนคร แขวงสำเหร่ เขตธนบุรี ', 'name_en' => 'The Riverside', 'address_en' => 'Room No.- 206, Charoennakorn Road, Samrae, Thonburi, Bangkok 10600', 'tel' => '061-421-2230', 'lat' => '13.7053289', 'lng' => '100.4733248'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        22 => array ('province_id'=> 1, 'name_th' => 'เซ็นทรัลเฟสติวัล อีสท์ วิลล์', 'address_th' => 'ห้องเลขที่ 213 ชั้น 2  เซ็นทรัลเฟสติวัล อีสท์ วิลล์ ', 'name_en' => 'Central Festival East ville', 'address_en' => '2nd Floor, Central Festival East Ville, Praditmanutham Road, Bangkok 10700', 'tel' => '061-421-2243', 'lat' => '13.8036116', 'lng' => '100.6119115' ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        23 => array ('province_id'=> 1, 'name_th' => 'สเปล แอท ฟิวเจอร์ปาร์ค', 'address_th' => 'ห้องเลขที่ PL2.2.SHP001 ชั้น 2  สเปล แอท ฟิวเจอร์ปาร์ค ถนนพหลโยธิน ', 'name_en' => 'Zpell @Futurer Park', 'address_en' => '2nd Floor, Zpell@Future Park Rangsit, Phahonyothin Road, Prachatipat, Thanyaburi, Phathumtani 12130', 'tel' => '061-421-2261', 'lat' => '13.9888135', 'lng' => '100.6152863'  ,'status'=> 1  ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        24 => array ('province_id'=> 1, 'name_th' => 'เมกาบางนา', 'address_th' => 'ห้องที่ 2208-2209 ชั้น2  เมกาบางนา 38,38/1,39 ถนนบางนา-ตราด กิโลเมตรที่ 8 ', 'name_en' => 'MEGA BANGNA', 'address_en' => '2nd Floor, Mega Bangna, 38, 38/1, 39 Bangna-Trad Rd., K.m. 8, Bangkaew, Bangplee, Samutprakran, 10540', 'tel' => '061-418-8025', 'lat' => '13.6466873', 'lng' => '100.6781248'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        25 => array ('province_id'=> '28', 'name_th' => 'เซ็นทรัล ขอนแก่น', 'address_th' => '99 ศูนย์การค้าเซ็นทรัล ขอนแก่น ชั้น 4 ห้องเลขที่ 427-430,431/2','name_en' => 'Central Plaza Khonkaen', 'address_en' => 'CentralPlaza Khonkaen, 4th Fl, Sri-Chan Road, Muang District, Khonkaen 40000', 'tel' => '085-484-8816', 'lat' => '16.432901', 'lng' => '102.8233933'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        26 => array ('province_id'=> '11', 'name_th' => 'เซ็นทรัล ชลบุรี', 'address_th' => '55/88-89 ศูนย์การค้าเซ็นทรัล ชลบุรี ชั้น 3 ห้องเลขที่ 319 ม.1 ถ.สุขุมวิท  ', 'name_en' => 'Central Plaza Chonburi', 'address_en' => '3rd Fl. Robinson Zone, CentralPlaza Chonburi Departmentstore Moo 1, Sukhumvit Road, Muang District, Chonburi 20000', 'tel' => '085-484-8815', 'lat' => '13.3365332', 'lng' => '100.9675367'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        27 => array ('province_id'=> '11', 'name_th' => 'พัทยา', 'address_th' => 'ห้องเลขที่ D3-D6 ชั้น 3 เลขที่  218  ศูนย์การค้ารอยัลการ์เด้น พลาซ่า หมู่ที่ 10   ', 'name_en' => 'Pattaya', 'address_en' => 'Royal Garden Plaza Pattaya, 3rd Floor Beach Road, Cholburi 20150 ', 'tel' => '085-484-8803', 'lat' => '12.9374901', 'lng' => '100.8727929'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        28 => array ('province_id'=> '11', 'name_th' => 'เซ็นทรัล พัทยา', 'address_th' => '333/99-333/100 ห้างเซ็นทรัล พัทยา ชั้น 6  ม.9  ถ.พัทยาสาย 2 ', 'name_en' => 'Central Festival Pattaya', 'address_en' => '333/99-333/100 Central Festival Pattaya 6th Floor Pattaya Sai 2 Road, Nong Prue, Bang Lamung, Cholburi 20150', 'tel' => '085-484-8814', 'lat' => '12.9289569', 'lng' => '100.8525475'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        29 => array ('province_id'=> '11', 'name_th' => 'แปซิฟิค พาร์ค ศรีราชา', 'address_th' => 'ห้องเลขที่  T301-2   ชั้น 3 เลขที่ 90   ถนนสุขุมวิท   ตำบลศรีราชา', 'name_en' => 'Pacific Park Sriracha', 'address_en' => '3rd Floor, Sukhumvit Rd.Sriracha, Chonburi', 'tel' => '085-661-5067', 'lat' => '13.169123', 'lng' => '100.9281833'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        30 => array ('province_id'=> '45', 'name_th' => 'เซ็นทรัล เชียงราย', 'address_th' => 'พื้นที่หมายเลข# 241/2,242 ชั้น 2 ศูนย์การค้าเซ็นทรัลพลาซ่า เชียงราย, ', 'name_en' => 'Central Plaza Chiangrai', 'address_en' => '2nd Floor , Robinson zone CentralPlaza Chiangrai 99/9 Moo.13 Muang District, Chiangrai, 57000', 'tel' => '085-484-8829', 'lat' => '19.8867021', 'lng' => '99.8333168'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        31 => array ('province_id'=> '38', 'name_th' => 'เซ็นทรัล แอร์พอร์ท พลาซ่า', 'address_th' => 'เลขที่ 2 ห้องเลขที่ 436-439  ชั้น 4  เซ็นทรัล แอร์พอร์ท พลาซ่า ถนนมหิดล ','name_en' => 'Central Airport Plaza', 'address_en' => 'Central Airport Plaza, 4th Floor Mahidol Road, Muang District, Chiangmai 50110', 'tel' => '085-484-8808', 'lat' => '18.7689491', 'lng' => '98.9731214'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        32 => array ('province_id'=> '38', 'name_th' => 'เซ็นทรัล เฟสติวัล เชียงใหม่', 'address_th' => 'ห้องเลขที่ 516 ชั้น 5 ศูนย์การค้าเซ็นทรัลเฟสติวัล เชียงใหม่ เลขที่ 99,99/1,99/2 หมู่ 4 ', 'name_en' => 'Central Festival Chiangmai', 'address_en' => '5th Fl. , Moo 4, Super Highway Road, Muang District, Chiangmai 50000', 'tel' => '092-250-7838', 'lat' => '18.807268', 'lng' => '99.0159333'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        33 => array ('province_id'=> '58', 'name_th' => 'เซ็นทรัล ศาลายา', 'address_th' => 'ห้องเลขที่ 153-154 , ชั้น 1  ศูนย์การค้าเซ็นทรัลพลาซ่าศาลายา 99/21 หมู่ 2 ', 'name_en' => 'Central Salaya', 'address_en' => 'Unit No.153-154, 1st floor, Central Plaza Salaya, 99/21 Moo2, Bangtoei, Samphran District, Nakhon Prathom Province. 73210', 'tel' => '061-4038121', 'lat' => '13.787276', 'lng' => '100.2741423'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        34 => array ('province_id'=> '19', 'name_th' => 'เดอะมอลล์ โคราช ', 'address_th' => 'เลขที่ 1242/2  ชั้น 2 ห้างเดอะมอลล์โคราช  ถนนมิตรภาพ  ตำบลในเมือง', 'name_en' => 'The Mall Korat', 'address_en' => 'The Mall Korat 2nd Floor Mittraparp Road, Muang Distric, Nakhonratchasima 30000', 'tel' => '085-484-8807', 'lat' => '14.9346032', 'lng' => '102.0951789'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        35 => array ('province_id'=> '63', 'name_th' => 'เซ็นทรัล นครศรีธรรมราช', 'address_th' => 'ห้องเลขที่. 312-313, ชั้นที่ 3, เซ็นทรัล พลาซ่า นครศรีธรรมราช, ', 'name_en' => 'Central Plaza NakornSrithammarat', 'address_en' => '312-313, 3rd floor, Central Plaza Nakhon Sri Thammarat, Mueang Nakhon Sri Thammarat District, Nakhon Sri Thammarat 80000', 'tel' => '085-484-8804', 'lat' => '8.4062815', 'lng' => '99.949013'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        36 => array ('province_id'=> '3 ', 'name_th' => 'เดอะมอลล์ งามวงศ์วาน', 'address_th' => 'เลขที่ 30/39-50  ห้างเดอะมอลล์งามวงศ์วาน ชั้น 3 เดอะมอลล์งามวงศ์วาน ', 'name_en' => 'The Mall Ngamwongwan', 'address_en' => 'The Mall Ngamwongwan Ngamwongwan Road, Bangkhen, Nonthaburi 11000', 'tel' => '061-421-1891', 'lat' => '13.855467', 'lng' => '100.5400025'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        37 => array ('province_id'=> '4', 'name_th' => 'ฟิวเจอร์ปาร์ค รังสิต', 'address_th' => 'เลขที่ 161  ชั้น G โซลเซ็นทรัล อาคารฟิวเจอร์ พาร์ค รังสิต  หมู่ที่ 2', 'name_en' => 'Future Park Rangsit', 'address_en' => 'Central Zone, Ground Floor Thanyaburi, Pathumthani 12110', 'tel' => '061-421-1859', 'lat' => '13.9891583', 'lng' => '100.6156565'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        38 => array ('province_id'=> '62', 'name_th' => 'หัวหิน มาร์เก็ตวิลเลจ', 'address_th' => '234/1 ห้องเลขที่ A207,A209 ชั้น 2 อาคารศูนย์การค้าหัวหิน มาร์เก็ต วิลเลจ ถ.เพชรเกษม', 'name_en' => 'Hua Hin Market Village', 'address_en' => 'Huahin Market Village 2nd Floor Huahin Prajuabkirikhan 77110',  'tel' => '085-484-8813', 'lat' => '12.557632', 'lng' => '99.9569948'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        39 => array ('province_id'=> '62', 'name_th' => 'บลูพอร์ต หัวหิน', 'address_th' => 'ห้องเลขที่ 212/1 ชั้น 2 ศูนย์การค้าบลูพอร์ต หัวหิน ซอยหัวหิน100 (อาคเนย์)', 'name_en' => 'Blu Port Hua Hin', 'address_en' => 'Unit No.- 212/1, 2nd Floor, Blu\'port Huahin Resot Mall, Soi Huahin100 (Akane) Petchkasem Rd., Nongkae, Hua Hin District, Prachuap Khiri Khan 77110', 'tel' => '063-225-7663', 'lat' => '12.5477715', 'lng' => '99.9599138'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        40 => array ('province_id'=> '66', 'name_th' => 'เซ็นทรัล ภูเก็ต', 'address_th' => 'เลขที่ 74-75  ชั้น 3 ห้องเลขที่ 311-312 ห้างเซ็นทรัลเฟสติวัล ม.5  ต.วิชิต', 'name_en' => 'Central Phuket', 'address_en' => 'Central Festival 3rd Floor Muang District, Phuket 83000', 'tel' => '085-484-8812', 'lat' => '7.8903004', 'lng' => '98.370803'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        41 => array ('province_id'=> '12', 'name_th' => 'เซ็นทรัล ระยอง', 'address_th' => 'ห้องที่ 169-170  เลขที่ 99,99/1 ถนน บางนา-ตราด ตำบลเชิงเนิน', 'name_en' => 'Central Plaza Rayong', 'address_en' => '1 Fl., Central Plaza Rayong 99,99/1 Bangna-Trad Road, Choengnoen, Muangrayong, Rayong 21000', 'tel' => '085-484-8805', 'lat' => '12.7568899', 'lng' => '101.1287667'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        42 => array ('province_id'=> '12', 'name_th' => 'แหลมทอง  ระยอง', 'address_th' => 'พื้นที่หมายเลข เอ 037, ชั้น 1  ศูนย์การค้าแหลมทองพลาซ่า-ระยอง เลขที่ 554 ', 'name_en' => 'Laemtong Rayong', 'address_en' => '554 Laemtong Plaza Rayong Sukhumvit Rd. Nuenpra District, Muaeng, Rayong 21000', 'tel' => '085-484-8821', 'lat' => '12.6275204', 'lng' => '101.375414'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        43 => array ('province_id'=> '70', 'name_th' => 'เซ็นทรัล เฟสติวัล หาดใหญ่', 'address_th' => 'ห้องเลขที่513  ศูนย์การค้าเซ็นทรัลเฟสติวัลหาดใหญ่ เลขที่1518,1518/1-1518/2 ', 'name_en' => 'Central Festival Hadyai', 'address_en' => 'Central Festival Hadyai 5th Floor Kanjanavanich Rd., Hadyai, Songkhla 90110', 'tel' => '092-250-7839', 'lat' => '6.9915948', 'lng' => '100.4807514'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        44 => array ('province_id'=> '67', 'name_th' => 'เซ็นทรัล สุราษฎร์ธานี', 'address_th' => 'ห้องที่ 326 ชั้น 3 เซ็นทรัล พลาซ่า สุราษฎร์ธานี เลขที่ 88 หมู่10 ตำบลวัดประดู่ ', 'name_en' => 'CentralPlaza Surat Thani', 'address_en' => '326, 3rd Floor, Central Plaza Surat Thani, 88 Moo 10, Watpradoo, Muang District, Suratthani 84000',  'tel' => '061-418-8358', 'lat' => '9.1104273', 'lng' => '99.3005363'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        45 => array ('province_id'=> '29', 'name_th' => 'เจริญศรี อุดรธานี', 'address_th' => 'ห้องเลขที่ 402 ชั้น 4 เลขที่ 277/1-3,271/5 ศูนย์การค้าเซ็นทรัล อุดร ', 'name_en' => 'Central Plaza Udonthani', 'address_en' => '4th Floor Muang District, Udonthani 41000 ', 'tel' => '085-484-8810', 'lat' => '17.5622081', 'lng' => '102.4288911'  ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21'),
	        46 => array ('province_id'=> '23 ', 'name_th' => 'เซ็นทรัล อุบลราชธานี', 'address_th' => 'ห้องที่ 315-317 ชั้น 3 เลขที่ 311 หมู่ 7 ตำบลแจระแม  อำเภอเมืองอุบลราชธานี', 'name_en' => 'Central Plaza Ubonratchathani', 'address_en' => 'CentralPlaza Ubonratchathani, 3rd Fl, Tambon Jaeramae, Muang District, Ubon Ratchathani 34000', 'tel' => '081-938-5646', 'lat' => '15.240301', 'lng' => '104.8211333' ,'status'=> 1 ,'created_at' => '2016-12-13 19:53:21','updated_at' => '2016-12-13 19:53:21')
		));

		\DB::table('releases')->delete();
		\DB::table('releases')->insert(array (
			0 => 
			array (
				'url' => '',
				'title_th' => 'ต้อนรับเทศกาลวันแม่',
				'title_en' => 'ต้อนรับเทศกาลวันแม่',
				'thumbnail_th' => '201707/1500191793_p1.jpg',
				'thumbnail_en' => '',
				'short_description_th' => '“ซิซซ์เล่อร์” แนะนำโปรโมชั่นมื้อกลางวันสุดคุ้ม กับ “ลันช์ สเปเชี่ยล” เริ่มต้นเพียง 175 – 199 บาท',
				'short_description_en' => '“ซิซซ์เล่อร์” แนะนำโปรโมชั่นมื้อกลางวันสุดคุ้ม กับ “ลันช์ สเปเชี่ยล” เริ่มต้นเพียง 175 – 199 บาท',
				'text_th' => '<h3>ต้อนรับเทศกาลวันแม่</h3>

<p>นงชนก สถานานนท์ (ที่ 4 จากซ้าย) ผู้ช่วยรองประธานบริหาร กลุ่มการตลาด บริษัท เอส แอล อาร์ ที จำกัด แนะนำเมนูพิเศษ ต้อนรับเทศกาลวันแม่ กับ &ldquo;ปลาเรนโบว์เทราต์จากโครงการหลวง เสิร์ฟคู่กับซอสเลมอนแอนด์ดิลด์&rdquo; (Grilled Rainbow Trout with Lemon &amp; Dill Sauce) ที่คัดสรรปลาเรนโบว์เทราต์ระดับพรีเมี่ยม ซึ่งมีแค่ปีละครั้ง มารังสรรค์เป็นเมนูสเต็กเนื้อนุ่ม กลมกล่อม แสนอร่อย ดีต่อสุขภาพ พร้อมน้ำเสาวรสจากโครงการหลวง สูตรเฉพาะของซิซซ์เล่อร์ ที่ร้านซิซซ์เล่อร์ทุกสาขา ตั้งแต่วันที่ 8-12 สิงหาคมนี้ โดยมี ท่านหญิงปัทมนรังษี เสนาณรงค์, ปัทมวดี เสนาณรงค์ และมนชยา ไกรฤกษ์, ณัฐชยา ไกรฤกษ์ ร่วมงาน ณ ร้านซิซซ์เล่อร์ ชั้น 5 สยามสแควร์วัน หรือ SQ-1</p>',
				'text_en' => '',
				'status' => 1,
				'position' => 1,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'url' => '',
				'title_th' => '“ซิซซ์เล่อร์” แนะนำโปรโมชั่นมื้อกลางวันสุดคุ้ม กับ “ลันช์ สเปเชี่ยล” เริ่มต้นเพียง 175 – 199 บาท',
				'title_en' => '“ซิซซ์เล่อร์” แนะนำโปรโมชั่นมื้อกลางวันสุดคุ้ม กับ “ลันช์ สเปเชี่ยล” เริ่มต้นเพียง 175 – 199 บาท',
				'thumbnail_th' => '201707/1500191820_p1.jpg',
				'thumbnail_en' => '',
				'short_description_th' => '“ซิซซ์เล่อร์” แนะนำโปรโมชั่นมื้อกลางวันสุดคุ้ม กับ “ลันช์ สเปเชี่ยล” เริ่มต้นเพียง 175 – 199 บาท',
				'short_description_en' => '“ซิซซ์เล่อร์” แนะนำโปรโมชั่นมื้อกลางวันสุดคุ้ม กับ “ลันช์ สเปเชี่ยล” เริ่มต้นเพียง 175 – 199 บาท',
				'text_th' => '<h3>&ldquo;ซิซซ์เล่อร์&rdquo; แนะนำโปรโมชั่นมื้อกลางวันสุดคุ้ม กับ &ldquo;ลันช์ สเปเชี่ยล&rdquo; เริ่มต้นเพียง 175 &ndash; 199 บาท</h3>

<p>&ldquo;ซิซซ์เล่อร์&rdquo; (Sizzler) ขอแนะนำความอร่อยที่จะมาเติมเต็มประสบการณ์มื้อกลางวันสุดพิเศษของคุณ ในราคาสุดคุ้มเริ่มเพียง 175-199 บาท กับโปรโมชั่น &ldquo;ลันช์ สเปเชี่ยล&rdquo; (Lunch Special) ผ่าน 3 เมนูชวนชิมที่เลือกตามสไตล์ที่ชอบ ไม่ว่าจะเป็น &ldquo;ปลาชุบเกล็ดขนมปังทอด&rdquo; สเต็กปลาทอดพร้อมเฟรนซ์ฟรายด์ชิ้นหนานุ่ม ในราคาเพียง 175 บาท หรือจะเลือกอร่อยกับเมนูใหม่ &ldquo;สเต็กไก่เป็ปเปอรี่สไปซี่&rdquo; และเมนูยอดนิยมกับ &ldquo;สเต็กเนื้อบดเทอริยากิ&rdquo; เสิร์ฟพร้อมเห็ดผัดเนยหอมกรุ่น ในราคาเมนูละ 199 บาท โดยทุกเมนูเสิร์ฟพร้อมสลัดบาร์ ผักคุณภาพสด ใหม่จากโครงการหลวง ตักเติมได้ไม่จำกัด ให้คุณอร่อยครบมื้อทั้งซุปรสเข้มข้น สลัดปรุงสำเร็จ และผักสด รวมถึงน้ำสลัดที่หลากหลาย พร้อมผลไม้และของหวานให้เลือกกว่า 50 รายการ เชิญสัมผัสกับ เมนู &ldquo;ลันช์ สเปเชียล&rdquo; ของ &ldquo;ซิซซ์เล่อร์&rdquo; ได้แล้ววันนี้ เฉพาะวันจันทร์ &ndash; ศุกร์ ตั้งแต่เปิดร้าน &ndash; 14.00 น. ณ ร้านซิซซ์เล่อร์ ทุกสาขา ตั้งแต่วันนี้เป็นต้นไป (ยกเว้นวันหยุดนักขัตฤกษ์)</p>

<p>&nbsp;</p>

<p>นงชนก สถานานนท์ (ที่ 4 จากซ้าย) ผู้ช่วยรองประธานบริหาร กลุ่มการตลาด บริษัท เอส แอล อาร์ ที จำกัด จัดงานแนะนำโปรโมชั่น &ldquo;ซิซซ์เล่อร์ ลันช์ สเปเชี่ยล&rdquo; (Sizzler&rsquo;s Lunch Special) ความอร่อยที่จะมาเติมเต็มประสบการณ์มื้อกลางวันสุดพิเศษ ในราคาสุดคุ้ม เริ่มเพียง 175-199 บาท ทุกวันจันทร์-ศุกร์ ตั้งแต่เปิดร้านจนถึง 14.00 น. กับ 3 เมนู ได้แก่ &ldquo;สเต็กไก่เป็ปเปอรี่สไปซี่&rdquo; , &ldquo;ปลาชุบเกล็ดขนมปังทอด&rdquo; หรือ &ldquo;สเต็กเนื้อบดเทอริยากิ&rdquo; พร้อมสลัดบาร์ตักเติมได้ไม่อั้น โดยมี จินดาภา บุณยากร, ธาราวดี สนิทวงศ์ ณ อยุธยา, อรรถวดี จิรมณีกุล และชลิดา เถาว์ชาลี ตันติพิภพ ร่วมงาน ณ ร้านซิซซ์เล่อร์ ชั้น 5 สยามสแควร์วัน หรือ SQ-1</p>

<p>&nbsp;</p>',
				'text_en' => '',
				'status' => 1,
				'position' => '2',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));

		\DB::table('releases_images')->delete();
		\DB::table('releases_images')->insert(array (
			0 => 
			array (
				'image' => '201707/1500194620_p3.jpg',
				'release_id' => 5,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'image' => '201707/1500194718_p2.jpg',
				'release_id' => 5,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			2 => 
			array (
				'image' => '201707/1500196093_p1.jpg',
				'release_id' => 4,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			3 => 
			array (
				'image' => '201707/1500196093_p2.jpg',
				'release_id' => 4,
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			
		));





    }
}
