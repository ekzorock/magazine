<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('article_check');// 
            // $table->integer('count_check');// количество 
            // $table->string('delivery_check');// тип доставки
            // $table->string('name_check');// имя
            // $table->string('surname_check');// фамилия
            // $table->string('middle_name_check');// отчество
            // $table->string('address_check');// адрес
            // $table->string('telephone_check');// номер телефона
            // $table->string('mail_check');// почта
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
