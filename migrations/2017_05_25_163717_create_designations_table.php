<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',20);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->integer('position_id')->unsigned(); // tipo de cargo
            $table->integer('funcdir_id')->unsigned(); // funcion/directiva
            // $table->integer('funcdir_id')->unsigned(); // funcion/directiva
            // $table->string('function',15); // funcion pe. f-1, f-2,etc
            $table->integer('operative_unit_id')->unsigned(); // unidad operativa
            $table->date('since');
            $table->date('until');
            $table->boolean('with_without'); // con o sin resolucion
            $table->boolean('charge_desig'); // encargatura o designacion
            $table->boolean('previous_after'); // anterior o despues
            $table->boolean('current_doc'); // documentacion vigente si o no
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('designations', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('position_id')->references('id')->on('tpositiondata');
            // $table->foreign('funcdir_id')->references('id')->on('tfuncdirdata');
            $table->foreign('funcdir_id')->references('id')->on('tleveldata');
            $table->foreign('operative_unit_id')->references('id')->on('tlocationdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designations');
    }
}
