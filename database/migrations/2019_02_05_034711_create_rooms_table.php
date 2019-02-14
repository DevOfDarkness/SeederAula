<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    // Tabela de quartos.
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->longText('description');
            $table->integer('vacancies');
            $table->integer('vacancies_remaining');
            $table->integer('hotel_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('rooms',function(Blueprint $table)  {
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
