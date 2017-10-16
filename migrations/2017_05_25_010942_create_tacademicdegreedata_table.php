<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacademicdegreedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tacademicdegreedata', function (Blueprint $table) { //tipo de grado academico
            $table->increments('id');
            $table->string('initials',5);
            $table->string('academicdegree',40); // bachiller-titulo profesional-magister-
            $table->boolean('reggradtpr'); // grado o titulo
            $table->string('observation',40); // doctorado-segunda especialidad-colegiatura
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
        Schema::dropIfExists('tacademicdegreedata');
    }
}
