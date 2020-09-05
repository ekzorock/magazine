<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoodPictures40x50sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wood_pictures_40x50s', function (Blueprint $table) {
            $table->bigIncrements('id_wood_pictures_40x50');
            $table->string('article_wood_pictures_40x50');// артикул
            $table->string('name_wood_pictures_40x50');//наименование
            $table->double('price_wood_pictures_40x50');//цена
            $table->text('description_wood_pictures_40x50') -> nullable();// описание
            $table->text('sizing_wood_pictures_40x50');// размер
            $table->integer('color_wood_pictures_40x50');// количество цветов
            $table->text('brand_wood_pictures_40x50');// бренд
            $table->text('weight_wood_pictures_40x50');// вес картины
            $table->integer('complexity_wood_pictures_40x50');// кол-во звезд
            $table->text('inStock_wood_pictures_40x50');// наличие
            $table->text('imageMain_wood_pictures_40x50') -> nullable();//основная картинка
            $table->text('image1_wood_pictures_40x50') -> nullable();//вторая картинка
            $table->text('image2_wood_pictures_40x50') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wood_pictures_40x50s');
    }
}
