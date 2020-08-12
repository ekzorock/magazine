<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbroidery40x40sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embroidery_40x40s', function (Blueprint $table) {
            $table->bigIncrements('id_embroidery_40x40');
            $table->string('article_embroidery_40x40');// артикул
            $table->string('name_embroidery_40x40');//наименование
            $table->double('price_embroidery_40x40');//цена
            $table->text('description_embroidery_40x40') -> nullable();// описание
            $table->text('sizing_embroidery_40x40');// размер
            $table->integer('color_embroidery_40x40');// количество цветов
            $table->text('brand_embroidery_40x40');// бренд
            $table->text('weight_embroidery_40x40');// вес картины
            $table->integer('complexity_embroidery_40x40');// кол-во звезд
            $table->text('inStock_embroidery_40x40');// наличие
            $table->text('imageMain_embroidery_40x40') -> nullable();//основная картинка
            $table->text('image1_embroidery_40x40') -> nullable();//вторая картинка
            $table->text('image2_embroidery_40x40') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('embroidery_40x40s');
    }
}
