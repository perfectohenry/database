<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversityStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_studies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('country_id')->unsigned(); // pais | si(peru)=>city=null
            $table->integer('universidad_id')->unsigned();
            $table->string('grad_tpr',3); // grado academico o titulo
            // $table->string('institution',100);
            // $table->boolean('national_inst'); // institucion nacional o extranjera
            $table->integer('academicdegree_id')->unsigned();
            $table->integer('carrera_id')->unsigned(); // carrera
            $table->boolean('public_private'); // publica o privada
            $table->string('senior_year',4); // año de egreso
            $table->string('anr',20);
            $table->date('date_anr');
            $table->date('date_auth');
            $table->string('description',100)->nullable();
            $table->timestamps();
        });

        Schema::table('university_studies', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('academicdegree_id')->references('id')->on('tacademicdegreedata');
            $table->foreign('country_id')->references('id')->on('tcountrydata');
            $table->foreign('universidad_id')->references('id')->on('tuniversidaddata');
            $table->foreign('carrera_id')->references('id')->on('tcarreradata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('university_studies');
    }
}
