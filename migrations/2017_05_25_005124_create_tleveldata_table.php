<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTleveldataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tleveldata', function (Blueprint $table) {  // niveles o categorias
            $table->increments('id');
            $table->integer('estamento_id')->unsigned(); // estamento
            $table->string('initials',3); // STA, STB, SPA, SPB, SAA, SAB, ...
            $table->string('level',40);
            $table->boolean('activo')->default(1); // activo / no activo
            $table->string('observation',40);
            $table->timestamps();
        });

        Schema::table('tleveldata', function($table) {
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
        Schema::dropIfExists('tleveldata');
    }
}
