<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTfuncdirdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tfuncdirdata', function (Blueprint $table) {  // niveles o categorias
            $table->increments('id');
            $table->integer('estamento_id')->unsigned(); // estamento
            $table->string('initials',4); // F-1,F-2,F-3,D001,D002,D003,etc.
            $table->string('funcdir',40);
            $table->boolean('activo'); // activo / no activo
            $table->string('observation',40);
            $table->timestamps();
        });

        Schema::table('tfuncdirdata', function($table) {
            $table->foreign('estamento_id')->references('id')->on('testamentodata');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tfuncdirdata');
    }
}
