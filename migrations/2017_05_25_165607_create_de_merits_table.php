<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeMeritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('de_merits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',20);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->string('reason_change',100); // motivo de cambio puede tipificarse
            $table->integer('operative_unit_id')->unsigned(); // unidad operativa
            $table->boolean('merit_demerit'); // merito demerito
            $table->integer('demerit_id')->unsigned(); // merito demerito
            $table->boolean('with_without'); // con o sin resolucion
            $table->boolean('previous_after'); // anterior o despues
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('de_merits', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('operative_unit_id')->references('id')->on('tlocationdata');
            $table->foreign('demerit_id')->references('id')->on('tdemeritdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('de_merits');
    }
}
