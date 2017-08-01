<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',15);
            $table->date('date_expedition');
            $table->date('since');
            $table->date('until');
            $table->integer('level_id')->unsigned(); // nivel o categoria
            $table->integer('position_id')->unsigned(); // tipo de cargo
            $table->integer('fundingsource_id')->unsigned(); // tipo de ff
            $table->integer('contract_id')->unsigned(); // tipo de contrato
            $table->integer('location_id')->unsigned(); // ubicacion
            $table->integer('employee_id')->unsigned(); // tipo de trabajador
            $table->string('compo',40); // puede tipificarse - aclarar tipos
            $table->boolean('canceled'); // anulado
            $table->string('observation',40);
            $table->timestamps();
        });

        Schema::table('contracts', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('level_id')->references('id')->on('tleveldata');
            $table->foreign('position_id')->references('id')->on('tpositiondata');
            $table->foreign('fundingsource_id')->references('id')->on('tfundingsourcedata');
            $table->foreign('contract_id')->references('id')->on('tcontractdata');
            $table->foreign('location_id')->references('id')->on('tlocationdata');
            $table->foreign('employee_id')->references('id')->on('temployeedata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}