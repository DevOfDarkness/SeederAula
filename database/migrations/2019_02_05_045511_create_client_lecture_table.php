<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientLectureTable extends Migration
{
    // Tabela pivot para cliente e lecture.
    public function up()
    {
        Schema::create('client_lecture', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lecture_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->timestamps();
        });

		// Elaboração das chaves estrangeiras.
        Schema::table('client_lecture',function(Blueprint $table)  {
			// Chave estrangeira para lecture.
            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('cascade');
			// Chave estrangeira para cliente.
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lectures_clients');
    }
}
