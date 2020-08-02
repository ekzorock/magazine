<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintNumber40x50sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paint_number_40x50s', function (Blueprint $table) {
            $table->bigIncrements('id_paint_number_40x50');
            $table->string('article_paint_number_40x50');// артикул
            $table->string('name_paint_number_40x50');//наименование
            $table->double('price_paint_number_40x50');//цена
            $table->text('description_paint_number_40x50') -> nullable();// описание
            $table->text('sizing_paint_number_40x50');// размер
            $table->integer('color_paint_number_40x50');// количество цветов
            $table->text('brand_paint_number_40x50');// бренд
            $table->text('weight_paint_number_40x50');// вес картины
            $table->integer('complexity_paint_number_40x50');// кол-во звезд
            $table->text('inStock_paint_number_40x50');// наличие
            $table->text('imageMain_paint_number_40x50') -> nullable();//основная картинка
            $table->text('image1_paint_number_40x50') -> nullable();//вторая картинка
            $table->text('image2_paint_number_40x50') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paint_number_40x50s');
    }
}
