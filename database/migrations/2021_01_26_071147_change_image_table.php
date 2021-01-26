<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('videos');
        Schema::table('images', function (Blueprint $table) {
            $table->longText('text_hy')->nullable();
            $table->longText('text_en')->nullable();
            $table->longText('text_ru')->nullable();
            $table->string('url')->nullable();
            $table->unsignedInteger('position')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->index()->unsigned();
            $table->string('owner_type');
            $table->string('url');
            $table->timestamps();
        });
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('text_hy');
            $table->dropColumn('text_en');
            $table->dropColumn('text_ru');
            $table->dropColumn('url');
            $table->dropColumn('position');
        });
    }
}
