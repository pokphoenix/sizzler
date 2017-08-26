<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_th')->nullable();
            $table->string('title_en')->nullable();
            $table->string('short_desc_th')->nullable();
            $table->string('short_desc_en')->nullable();
            $table->integer('price_th')->unsigned();
            $table->integer('price_en')->unsigned();
            $table->string('img_name_th')->nullable();
            $table->string('img_name_en')->nullable();
            $table->string('thumbnail_th')->nullable();
            $table->string('thumbnail_en')->nullable();
            $table->integer('category_id');
            $table->integer('status')->unsigned();
            // $table->integer('position')->unsigned()->default(0);
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
        Schema::dropIfExists('menus');
    }
}
