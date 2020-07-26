<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintingsCanvasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paintings_canvases', function (Blueprint $table) {
            $table->bigIncrements('id_canvases');
            $table->string('article_canvases');// артикул
            $table->string('name_canvases');//наименование
            $table->double('price_canvases');//цена
            $table->text('description_canvases') -> nullable();// описание
            $table->text('sizing_canvases');// размер
            $table->integer('color_canvases');// количество цветов
            $table->text('brand_canvases');// бренд
            $table->text('weight_canvases');// вес картины
            $table->integer('complexity_canvases');// кол-во звезд
            $table->text('inStock_canvases');// наличие
            $table->text('imageMain') -> nullable();//основная картинка
            $table->text('image1') -> nullable();//вторая картинка
            $table->text('image2') -> nullable();//третья картинка
            // $table->timestamps();// дата поступления
            // $table->integer('quantity') -> nullable();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paintings_canvases');
    }
}
