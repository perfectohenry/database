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
            $table->string('doc_number',15);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->integer('position_id')->unsigned(); // tipo de cargo
            $table->string('function',15); // funcion pe. f-1, f-2,etc
            $table->string('operative_unit',30); // unidad operativa
            $table->date('since');
            $table->date('until');
            $table->boolean('with_without'); // con o sin resolucion
            $table->boolean('charge_desig'); // encargatura o designacion
            $table->boolean('previous_after'); // anterior o despues
            $table->boolean('current_doc'); // documentacion vigente si o no
            $table->string('observation',40)->nullable();
            $table->timestamps();
        });

        Schema::table('designations', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('position_id')->references('id')->on('tpositiondata');
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
