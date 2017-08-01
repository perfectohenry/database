<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTpositiondataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpositiondata', function (Blueprint $table) { // cargos o puestos
            $table->increments('id');
            $table->integer('employee_id')->unsigned(); // estamento
            $table->string('initials',5);
            $table->string('position',40);
            $table->boolean('activo')->default(1); // activo / no activo
            $table->string('observation',40);
            $table->timestamps();
        });

        Schema::table('tpositiondata', function($table) {
            $table->foreign('employee_id')->references('id')->on('temployeedata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tpositiondata');
    }
}
