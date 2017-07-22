<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_th');
            $table->string('name_en');
            $table->string('thumbnail_th')->nullable();
            $table->string('thumbnail_en')->nullable();
            $table->integer('status')->unsigned();
            $table->integer('position')->unsigned()->default(0);
            $table->timestamps();
        });
        Schema::create('medias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('name_th');
            $table->string('short_desc_th')->nullable();
            $table->string('short_desc_en')->nullable();
            $table->string('name_en');
            $table->string('thumbnail_th')->nullable();
            $table->string('thumbnail_en')->nullable();
            $table->integer('media_category_id');
            $table->integer('status')->unsigned();
            $table->integer('position')->unsigned()->default(0);
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
        Schema::dropIfExists('media_categorys');
        Schema::dropIfExists('medias');
    }
}
