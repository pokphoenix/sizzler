<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthtipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthtip', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->nullable();
            $table->string('title_th')->nullable();
            $table->string('title_en')->nullable();
            $table->string('thumbnail_th')->nullable();
            $table->string('thumbnail_en')->nullable();
            $table->string('short_description_th')->nullable();
            $table->string('short_description_en')->nullable();
            $table->text('text_th')->nullable();
            $table->text('text_en')->nullable();
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
        Schema::dropIfExists('healthtip');
    }
}
