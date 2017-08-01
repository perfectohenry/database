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
            $table->boolean('national_inst'); // institucion nacional o extranjera
            $table->string('non_university_degree',40);
            $table->date('date_expedition');
            $table->string('institution',40);
            $table->string('career',40); // carrera
            $table->boolean('public_private'); // publica o privada
            $table->timestamps();
        });

        Schema::table('non_university_studies', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
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
