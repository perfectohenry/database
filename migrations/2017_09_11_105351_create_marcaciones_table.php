<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_p');
            $table->string('Codigo',6)->nullable();
            $table->string('Numero',4)->nullable(); //id trabajador
            $table->string('Cedula',3)->nullable();
            $table->string('Nombre',25)->nullable();
            $table->string('Horario',23)->nullable();
            $table->string('Estado',12)->nullable();
            $table->string('NvoEstado',12)->nullable();
            $table->string('Excepcion',22)->nullable();
            $table->string('Operacion',10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcaciones');
    }
}
