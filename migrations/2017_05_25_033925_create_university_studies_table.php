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
            $table->boolean('national_inst'); // institucion nacional o extranjera
            $table->integer('academicdegree_id')->unsigned();
            $table->string('description',40);
            $table->string('institution',40);
            $table->string('career',40); // carrera
            $table->boolean('public_private'); // publica o privada
            $table->string('senior_year',4); // año de egreso
            $table->string('anr',20);
            $table->date('date_anr');
            $table->timestamps();
        });

        Schema::table('university_studies', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('academicdegree_id')->references('id')->on('tacademicdegreedata');
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
