<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',20);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->integer('leave_id')->unsigned(); // tipo de licencias permisos
            $table->boolean('licence_leave'); // licencia o permiso
            $table->boolean('with_without'); // con o sin goce de haber
            $table->date('since');
            $table->date('until');
            $table->string('duration',50);
            $table->string('degree',45);
            $table->string('place_inst',45);
            $table->string('previous_after',3);
            $table->boolean('canceled'); // anulado
            $table->boolean('referential'); // referencial
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('licenses', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('leave_id')->references('id')->on('tleavedata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licenses');
    }
}
