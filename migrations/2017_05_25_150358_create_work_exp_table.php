<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_exp', function (Blueprint $table) { // experiencia laboral
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',100);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->integer('positionheld_id')->unsigned(); // tipo de cargo
            $table->boolean('recognized');
            $table->integer('labor_id')->unsigned(); // tipo de labor
            $table->string('condition',100);
            $table->date('since');
            $table->date('until');
            $table->string('duration',25);
            $table->string('years',2);
            $table->string('months',2);
            $table->string('days',2);
            // $table->string('institution',40);
            $table->integer('institution_id')->unsigned();
            $table->boolean('fiufie'); // fiufie
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('work_exp', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('positionheld_id')->references('id')->on('tpositionhelddata');
            $table->foreign('institution_id')->references('id')->on('tinstitutiondata');
            $table->foreign('labor_id')->references('id')->on('tlabordata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_exp');
    }
}
