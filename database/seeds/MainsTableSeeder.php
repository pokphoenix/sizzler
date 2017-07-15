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
				'id' => 1,
				'name_th' => 'หมู',
				'name_en' => 'pork',
				'thumbnail_th' => '201707/1499348084_c3.jpg',
				'thumbnail_en' => '',
				'status' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'id' => 2,
				'name_th' => 'ไก่',
				'name_en' => 'chicken',
				'thumbnail_th' => '201707/1499348065_Line-up.jpg',
				'thumbnail_en' => '',
				'status' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			2 => 
			array (
				'id' => 3,
				'name_th' => 'ทะเล',
				'name_en' => 'seafood',
				'thumbnail_th' => '201707/1499348057_IMG_0640.PNG',
				'thumbnail_en' => '',
				'status' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			3 => 
			array (
				'id' => 4,
				'name_th' => 'เนื้อ',
				'name_en' => 'beef',
				'thumbnail_th' => '201707/1499347640_b01.jpg',
				'thumbnail_en' => '',
				'status' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			4 => 
			array (
				'id' => 5,
				'name_th' => 'เบอเกอ',
				'name_en' => 'burger',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			5 => 
			array (
				'id' => 6,
				'name_th' => 'อาหารสำหรับเด็ก',
				'name_en' => 'kid menu',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			6 => 
			array (
				'id' => 7,
				'name_th' => 'เมนูผสมเนือ',
				'name_en' => 'combination beef',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			7 => 
			array (
				'id' => 8,
				'name_th' => 'เมนูผสม',
				'name_en' => 'combination suprem',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			8 => 
			array (
				'id' => 9,
				'name_th' => 'เมนูจานใหญ่',
				'name_en' => 'combination platter',
				'thumbnail_th' => '201707/1499348047_c1.jpg',
				'thumbnail_en' => '',
				'status' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
		));



		\DB::table('menus')->delete();
		\DB::table('menus')->insert(array (
			0 => 
			array (
				'id' => 33,
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
				'id' => 34,
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
				'id' => 35,
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
				'id' => 36,
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
				'id' => 49,
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
				'id' => 50,
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
				'id' => 51,
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
				'id' => 52,
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
				'id' => 53,
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
				'id' => 54,
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
				'id' => 55,
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
				'id' => 56,
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
				'id' => 61,
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
				'id' => 62,
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
				'id' => 63,
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
				'id' => 79,
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
				'id' => 80,
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
				'id' => 81,
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
				'id' => 82,
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
				'id' => 83,
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
				'id' => 84,
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
				'id' => 85,
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
				'id' => 86,
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
				'id' => 87,
				'name_th' => 'c4',
				'name_en' => 'c4',
				'img_th' => '201707/1499958148_img-chicken-4.jpg',
				'img_en' => '',
				'category_id' => 2,
				'created_at' => '2017-07-13 14:16:58',
				'updated_at' => '2017-07-13 14:16:58'
			),
		));


		\DB::table('banners')->delete();
		\DB::table('banners')->insert(array (
			0 => 
			array (
				'id' => 1,
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
				'id' => 1,
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
				'id' => 2,
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
				'id' => 1,
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
				'id' => 2,
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
				'id' => 3,
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
				'id' => 4,
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


		\DB::table('promotion-slider')->delete();
		\DB::table('promotion-slider')->insert(array (
			0 => 
			array (
				'id' => 1,
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
				'id' => 2,
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
    }
}
