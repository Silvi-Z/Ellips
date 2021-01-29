<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeVideoInImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('images', 'image_name')){
            Schema::table('images', function (Blueprint $table) {
                $table->dropColumn('image_name');
            });
        }
        Schema::table('images', function (Blueprint $table) {
            $table->string('image_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('images', 'image_name')) {
            Schema::table('images', function (Blueprint $table) {
                $table->dropColumn('image_name');
            });
        }
        Schema::table('images', function (Blueprint $table) {
            $table->string('image_name');
        });
    }
}
