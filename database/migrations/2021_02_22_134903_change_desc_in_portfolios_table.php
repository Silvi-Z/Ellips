<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDescInPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->longText('small_text_hy')->nullable()->change();
            $table->longText('small_text_en')->nullable()->change();
            $table->longText('small_text_ru')->nullable()->change();
            $table->text('text_hy')->nullable()->change();
            $table->text('text_en')->nullable()->change();
            $table->text('text_ru')->nullable()->change();
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
            //
        });
    }
}
