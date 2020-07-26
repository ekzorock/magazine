<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumboxes', function (Blueprint $table) {
            $table->bigIncrements('id_rumbox');
            $table->string('article_rumbox');// артикул
            $table->string('name_rumbox');//наименование
            $table->double('price_rumbox');//цена
            $table->text('description_rumbox') -> nullable();// описание
            $table->text('sizing_rumbox');// размер
            $table->integer('color_rumbox');// количество цветов
            $table->text('brand_rumbox');// бренд
            $table->text('weight_rumbox');// вес картины
            $table->integer('complexity_rumbox');// кол-во звезд
            $table->text('inStock_rumbox');// наличие
            $table->text('imageMain_rumbox') -> nullable();//основная картинка
            $table->text('image1_rumbox') -> nullable();//вторая картинка
            $table->text('image2_rumbox') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rumboxes');
    }
}
