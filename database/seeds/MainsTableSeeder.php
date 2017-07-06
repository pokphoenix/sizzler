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
				'thumbnail_th' => '',
				'thumbnail_en' => '',
				'status' => '1',
				'position' => '1',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			1 => 
			array (
				'id' => 2,
				'name_th' => 'ไก่',
				'name_en' => 'chicken',
				'thumbnail_th' => '',
				'thumbnail_en' => '',
				'status' => '1',
				'position' => '2',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			2 => 
			array (
				'id' => 3,
				'name_th' => 'ทะเล',
				'name_en' => 'seafood',
				'thumbnail_th' => '',
				'thumbnail_en' => '',
				'status' => '1',
				'position' => '3',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			3 => 
			array (
				'id' => 4,
				'name_th' => 'เนื้อ',
				'name_en' => 'beef',
				'thumbnail_th' => '',
				'thumbnail_en' => '',
				'status' => '1',
				'position' => '4',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			),
			4 => 
			array (
				'id' => 5,
				'name_th' => 'เบอเกอ',
				'name_en' => 'burger',
				'thumbnail_th' => '',
				'thumbnail_en' => '',
				'status' => '1',
				'position' => '5',
				'created_at' => '2015-12-13 19:53:21',
				'updated_at' => '2015-12-13 19:53:21'
			)
		));
    }
}
