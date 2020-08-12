<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMosaic3d40x50sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosaic3d_40x50s', function (Blueprint $table) {
            $table->bigIncrements('id_mosaic3d_40x50');
            $table->string('article_mosaic3d_40x50');// артикул
            $table->string('name_mosaic3d_40x50');//наименование
            $table->double('price_mosaic3d_40x50');//цена
            $table->text('description_mosaic3d_40x50') -> nullable();// описание
            $table->text('sizing_mosaic3d_40x50');// размер
            $table->integer('color_mosaic3d_40x50');// количество цветов
            $table->text('brand_mosaic3d_40x50');// бренд
            $table->text('weight_mosaic3d_40x50');// вес картины
            $table->integer('complexity_mosaic3d_40x50');// кол-во звезд
            $table->text('inStock_mosaic3d_40x50');// наличие
            $table->text('imageMain_mosaic3d_40x50') -> nullable();//основная картинка
            $table->text('image1_mosaic3d_40x50') -> nullable();//вторая картинка
            $table->text('image2_mosaic3d_40x50') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mosaic3d_40x50s');
    }
}
