<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintNumber30x40sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paint_number_30x40s', function (Blueprint $table) {
            $table->bigIncrements('id_paint_number_30x40');
            $table->string('article_paint_number_30x40');// артикул
            $table->string('name_paint_number_30x40');//наименование
            $table->double('price_paint_number_30x40');//цена
            $table->text('description_paint_number_30x40') -> nullable();// описание
            $table->text('sizing_paint_number_30x40');// размер
            $table->integer('color_paint_number_30x40');// количество цветов
            $table->text('brand_paint_number_30x40');// бренд
            $table->text('weight_paint_number_30x40');// вес картины
            $table->integer('complexity_paint_number_30x40');// кол-во звезд
            $table->text('inStock_paint_number_30x40');// наличие
            $table->text('imageMain_paint_number_30x40') -> nullable();//основная картинка
            $table->text('image1_paint_number_30x40') -> nullable();//вторая картинка
            $table->text('image2_paint_number_30x40') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paint_number_30x40s');
    }
}
