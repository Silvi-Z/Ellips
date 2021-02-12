<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSmallDescriptionInPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->text('small_text_hy')->nullable();
            $table->text('small_text_en')->nullable();
            $table->text('small_text_ru')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn('small_text_hy');
            $table->dropColumn('small_text_en');
            $table->dropColumn('small_text_ru');
        });
    }
}
