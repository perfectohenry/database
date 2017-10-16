<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            
            $table->integer('training_id')->unsigned(); // tipo de capacitacion
            $table->string('estado',12); // CONCLUIDO ESTUDIANDO INCOMPLETO
            $table->string('curso',100); // curso
            $table->string('observacion',500)->nullable(); // observaciones

            $table->date('since'); // fecha de inicio
            $table->date('until'); // fecha de final
            $table->string('hours',20); // horas

            $table->string('institution',100); // institucion
            $table->integer('country_id')->unsigned(); // pais | si(peru)=>city=null
            $table->string('city',50)->nullable(); // ciudad
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('province_id')->unsigned()->nullable();
            $table->integer('district_id')->unsigned()->nullable();

            $table->timestamps();
        });

        Schema::table('training', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('training_id')->references('id')->on('ttrainingdata');
            $table->foreign('country_id')->references('id')->on('tcountrydata');
            $table->foreign('department_id')->references('id')->on('tdepartmentdata');
            $table->foreign('province_id')->references('id')->on('tprovincedata');
            $table->foreign('district_id')->references('id')->on('tdistrictdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training');
    }
}
