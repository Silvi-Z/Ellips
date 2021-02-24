<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomerInProtfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('client_hy')->nullable();
            $table->string('client_ru')->nullable();
            $table->string('client_en')->nullable();
            $table->string('work_hy')->nullable();
            $table->string('work_ru')->nullable();
            $table->string('work_en')->nullable();
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
            $table->dropColumn('client_hy');
            $table->dropColumn('client_ru');
            $table->dropColumn('client_en');
            $table->dropColumn('work_hy');
            $table->dropColumn('work_ru');
            $table->dropColumn('work_en');
        });
    }
}
