<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiamondSquare30x40sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diamond_square_30x40s', function (Blueprint $table) {
            $table->bigIncrements('id_diamond_square_30x40');
            $table->string('article_diamond_square_30x40');// артикул
            $table->string('name_diamond_square_30x40');//наименование
            $table->double('price_diamond_square_30x40');//цена
            $table->text('description_diamond_square_30x40') -> nullable();// описание
            $table->text('sizing_diamond_square_30x40');// размер
            $table->integer('color_diamond_square_30x40');// количество цветов
            $table->text('brand_diamond_square_30x40');// бренд
            $table->text('weight_diamond_square_30x40');// вес картины
            $table->integer('complexity_diamond_square_30x40');// кол-во звезд
            $table->text('inStock_diamond_square_30x40');// наличие
            $table->text('imageMain_diamond_square_30x40') -> nullable();//основная картинка
            $table->text('image1_diamond_square_30x40') -> nullable();//вторая картинка
            $table->text('image2_diamond_square_30x40') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diamond_square_30x40s');
    }
}
