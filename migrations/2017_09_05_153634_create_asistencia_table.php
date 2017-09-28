<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargar_asistencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Numero',4)->nullable(); //id trabajador
            $table->string('codigo',6)->nullable(); // tipo de documento
            $table->string('Cedula',4)->nullable();
            $table->string('Nombre',60)->nullable();
            $table->string('fecha',10)->nullable();
            $table->string('Horario',60)->nullable();
            $table->time('HoraEnt')->nullable();
            $table->time('HoraSal')->nullable();
            $table->time('Marc_Ent')->nullable();
            $table->time('Marc_Sal')->nullable();
            $table->integer('Normal')->nullable();
            $table->integer('TiempReal')->nullable();
            $table->time('Tardanza')->nullable();
            $table->time('SalioTempr')->nullable();
            $table->string('Falta')->nullable();
            $table->time('HoraExtra')->nullable();
            $table->time('Tiempo_trabajado')->nullable();
            $table->string('Excepcion')->nullable();

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
        Schema::dropIfExists('cargar_asistencia');
    }
}

