<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('services', 'url')){
            Schema::table('services', function (Blueprint $table) {

                $table->dropColumn('url');
            });
        }


        Schema::table('systems', function (Blueprint $table) {
            $table->string('url');
        });
        Schema::table('systems', function (Blueprint $table) {
            $table->dropColumn('text_hy');
            $table->dropColumn('text_en');
            $table->dropColumn('text_ru');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('url');
        });
        Schema::table('systems', function (Blueprint $table) {
            $table->longText('text_hy');
            $table->longText('text_en');
            $table->longText('text_ru');
        });
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('url');
        });
    }
}
