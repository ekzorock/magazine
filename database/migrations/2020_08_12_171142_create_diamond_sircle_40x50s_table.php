<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiamondSircle40x50sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diamond_sircle_40x50s', function (Blueprint $table) {
            $table->bigIncrements('id_diamond_sircle_40x50');
            $table->string('article_diamond_sircle_40x50');// артикул
            $table->string('name_diamond_sircle_40x50');//наименование
            $table->double('price_diamond_sircle_40x50');//цена
            $table->text('description_diamond_sircle_40x50') -> nullable();// описание
            $table->text('sizing_diamond_sircle_40x50');// размер
            $table->integer('color_diamond_sircle_40x50');// количество цветов
            $table->text('brand_diamond_sircle_40x50');// бренд
            $table->text('weight_diamond_sircle_40x50');// вес картины
            $table->integer('complexity_diamond_sircle_40x50');// кол-во звезд
            $table->text('inStock_diamond_sircle_40x50');// наличие
            $table->text('imageMain_diamond_sircle_40x50') -> nullable();//основная картинка
            $table->text('image1_diamond_sircle_40x50') -> nullable();//вторая картинка
            $table->text('image2_diamond_sircle_40x50') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diamond_sircle_40x50s');
    }
}
