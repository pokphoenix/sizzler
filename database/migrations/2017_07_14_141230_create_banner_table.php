<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->nullable();
            $table->string('name_img_th_1')->nullable();
            $table->string('name_img_en_1')->nullable();
            $table->string('img_th_1')->nullable();
            $table->string('img_en_1')->nullable();
            $table->string('name_img_th_2')->nullable();
            $table->string('name_img_en_2')->nullable();
            $table->string('img_th_2')->nullable();
            $table->string('img_en_2')->nullable();
            $table->integer('status')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
