<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('url');
        });
        Schema::table('services', function (Blueprint $table) {
            $table->string('url');
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('url');
        });
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('url');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('products', 'url')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('url');
            });
        }
        if (Schema::hasColumn('services', 'url')) {
            Schema::table('services', function (Blueprint $table) {
                $table->dropColumn('url');
            });
        }
        if (Schema::hasColumn('portfolios', 'url')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->dropColumn('url');
            });
        }
        if (Schema::hasColumn('portfolios', 'url')) {
            Schema::table('portfolios', function (Blueprint $table) {
                $table->dropColumn('url');
            });
        }
    }
}
