<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripNumber40x50sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_number_40x50s', function (Blueprint $table) {
            $table->bigIncrements('id_trip_number_40x50');
            $table->string('article_trip_number_40x50');// артикул
            $table->string('name_trip_number_40x50');//наименование
            $table->double('price_trip_number_40x50');//цена
            $table->text('description_trip_number_40x50') -> nullable();// описание
            $table->text('sizing_trip_number_40x50');// размер
            $table->integer('color_trip_number_40x50');// количество цветов
            $table->text('brand_trip_number_40x50');// бренд
            $table->text('weight_trip_number_40x50');// вес картины
            $table->integer('complexity_trip_number_40x50');// кол-во звезд
            $table->text('inStock_trip_number_40x50');// наличие
            $table->text('imageMain_trip_number_40x50') -> nullable();//основная картинка
            $table->text('image1_trip_number_40x50') -> nullable();//вторая картинка
            $table->text('image2_trip_number_40x50') -> nullable();//третья картинка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_number_40x50s');
    }
}
