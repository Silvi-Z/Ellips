<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_hy');
            $table->string('title_en');
            $table->string('title_ru');
            $table->longText('text_hy');
            $table->longText('text_en');
            $table->longText('text_ru');
            $table->decimal('price',10,3);
            $table->unsignedInteger('brand_id');
                $table->foreign('brand_id')
                    ->references('id')
                    ->on('brands');
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
        Schema::dropIfExists('products');
    }
}
