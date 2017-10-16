<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonUniversityStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_university_studies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('country_id')->unsigned(); // pais | si(peru)=>city=null
            $table->string('institution',100);
            // $table->boolean('national_inst'); // institucion nacional o extranjera
            $table->string('non_university_degree',100);
            $table->date('date_expedition');
            $table->string('career',100); // carrera
            $table->boolean('public_private'); // publica o privada
            $table->string('description',100)->nullable(); // observacion
            $table->timestamps();
        });

        Schema::table('non_university_studies', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('country_id')->references('id')->on('tcountrydata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('non_university_studies');
    }
}
