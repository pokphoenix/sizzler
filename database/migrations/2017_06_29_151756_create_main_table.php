<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_th');
            $table->string('name_en');
            $table->string('thumbnail_th')->nullable();
            $table->string('thumbnail_en')->nullable();

            // $table->string('name_img_th_1');
            // $table->string('name_img_th_2');
            // $table->string('name_img_th_3');
            // $table->string('name_img_th_4');
            // $table->string('name_img_th_5');
            // $table->string('name_img_th_6');

            // $table->string('name_img_en_1');
            // $table->string('name_img_en_2');
            // $table->string('name_img_en_3');
            // $table->string('name_img_en_4');
            // $table->string('name_img_en_5');
            // $table->string('name_img_en_6');

            // $table->string('img_th_1')->nullable();
            // $table->string('img_th_2')->nullable();
            // $table->string('img_th_3')->nullable();
            // $table->string('img_th_4')->nullable();
            // $table->string('img_th_5')->nullable();
            // $table->string('img_th_6')->nullable();

            // $table->string('img_en_1')->nullable();
            // $table->string('img_en_2')->nullable();
            // $table->string('img_en_3')->nullable();
            // $table->string('img_en_4')->nullable();
            // $table->string('img_en_5')->nullable();
            // $table->string('img_en_6')->nullable();


            $table->integer('status')->unsigned();
            $table->timestamps();
        });

        // Schema::create('menus', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('category_id')->unsigned();
        //     $table->string('url');
        //     $table->string('title_th');
        //     $table->string('title_en');
        //     $table->string('picture_th');
        //     $table->string('picture_en');
        //     $table->integer('show_position')->default(0);
        //     $table->integer('status')->unsigned();
        //     $table->timestamps();
        // });

        // Schema::create('promotions', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('url');
        //     $table->string('title_th');
        //     $table->string('title_en');
        //     $table->string('picture_th');
        //     $table->string('picture_en');
        //     $table->integer('show_position')->default(0);
        //     $table->integer('status')->unsigned();
        //     $table->timestamps();
        // });

        //  Schema::create('media_groups', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name_th');
        //     $table->string('name_en');
        //     $table->integer('status')->unsigned();
        //     $table->timestamps();
        // });

        //  Schema::create('medias', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('media_group_id')->unsigned();
        //     $table->string('url');
        //     $table->string('title_th');
        //     $table->string('title_en');
        //     $table->string('picture_th');
        //     $table->string('picture_en');
        //     $table->integer('show_position')->default(0);
        //     $table->integer('status')->unsigned();
        //     $table->timestamps();
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorys');
        // Schema::dropIfExists('menus');
        // Schema::dropIfExists('promotions');
        // Schema::dropIfExists('medias_groups');
        // Schema::dropIfExists('medias');
    }
}
