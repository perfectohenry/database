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
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',15);
            $table->date('date_expedition');
            $table->string('reason',45);
            $table->integer('participation_id')->unsigned(); // tipo de participacion
            $table->string('institution',45);
            $table->string('place',45);
            $table->date('since');
            $table->date('until');
            $table->string('duration',15);
            $table->string('previous_after',3);
            $table->boolean('legalized'); // doc legalizado si/no
            $table->date('date_reception');
            $table->string('observation',40);
            $table->timestamps();
        });

        Schema::table('training', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('participation_id')->references('id')->on('tparticipationdata');
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
