<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->nullable();
            $table->string('name_th')->nullable();
            $table->string('name_en')->nullable();
            $table->string('img_th')->nullable();
            $table->string('img_en')->nullable();
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
        Schema::dropIfExists('homeviews');
    }
}
