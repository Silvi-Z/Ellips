<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionInSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('systems', function (Blueprint $table) {
            $table->longText('text_hy')->nullable();
            $table->longText('text_en')->nullable();
            $table->longText('text_ru')->nullable();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('url')->nullable();
            $table->string('image')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('systems', function (Blueprint $table) {
            $table->dropColumn('text_hy');
            $table->dropColumn('text_en');
            $table->dropColumn('text_ru');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('url');
            $table->dropColumn('image');
        });
    }
}
