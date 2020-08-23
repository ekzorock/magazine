<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->bigIncrements('id_accessories');
            $table->string('article_accessories');// артикул
            $table->string('name_accessories');//наименование
            $table->double('price_accessories');//цена
            $table->text('description_accessories') -> nullable();// описание
            $table->text('sizing_accessories');// размер
            $table->integer('color_accessories');// количество цветов
            $table->text('brand_accessories');// бренд
            $table->text('weight_accessories');// вес картины
            $table->integer('complexity_accessories');// кол-во звезд
            $table->text('inStock_accessories');// наличие
            $table->text('imageMain_accessories') -> nullable();//основная картинка
            $table->text('image1_accessories') -> nullable();//вторая картинка
            $table->text('image2_accessories') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessories');
    }
}
