<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiamond20x30sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diamond_20x30s', function (Blueprint $table) {
            $table->bigIncrements('id_diamond_20x30');
            $table->string('article_diamond_20x30');// артикул
            $table->string('name_diamond_20x30');//наименование
            $table->double('price_diamond_20x30');//цена
            $table->text('description_diamond_20x30') -> nullable();// описание
            $table->text('sizing_diamond_20x30');// размер
            $table->integer('color_diamond_20x30');// количество цветов
            $table->text('brand_diamond_20x30');// бренд
            $table->text('weight_diamond_20x30');// вес картины
            $table->integer('complexity_diamond_20x30');// кол-во звезд
            $table->text('inStock_diamond_20x30');// наличие
            $table->text('imageMain_diamond_20x30') -> nullable();//основная картинка
            $table->text('image1_diamond_20x30') -> nullable();//вторая картинка
            $table->text('image2_diamond_20x30') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diamond_20x30s');
    }
}
