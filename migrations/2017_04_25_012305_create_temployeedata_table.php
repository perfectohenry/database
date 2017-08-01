<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemployeedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temployeedata', function (Blueprint $table) { // tipo de trabajador
            $table->increments('id');
            $table->integer('estamento_id')->unsigned(); // estamento
            $table->string('initials',5);
            $table->string('employee',40);
            $table->boolean('activo')->default(1); // activo / no activo
            $table->string('observation',40);
            $table->timestamps();
        });

        Schema::table('temployeedata', function($table) {
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
        Schema::dropIfExists('temployeedata');
    }
}
