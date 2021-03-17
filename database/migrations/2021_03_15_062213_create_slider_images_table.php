<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_images', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('lang',['en','hy','ru'])->default('hy');
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->unsignedInteger('slider_id');
            $table->foreign('slider_id')
                ->references('id')
                ->on('sliders')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('slider_images');
    }
}
