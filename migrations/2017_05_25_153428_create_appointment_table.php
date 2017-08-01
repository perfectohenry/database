<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) { // nombramiento
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',15);
            $table->date('date_expedition');
            $table->date('date_validity');
            $table->string('attached',4);
            $table->integer('level_id')->unsigned(); // nivel o categoria
            $table->integer('position_id')->unsigned(); // tipo de cargo
            $table->string('pension_sch',30); // regimen de pensiones)
            $table->string('condition',10); // condicion
            $table->string('modality',15); // puede tipificarse -- pe. CPU (tipos de contratos??
            $table->string('ing_nom_rat',15); // ingreso nombramiento o ratificacion
            $table->string('previous_after',3); // anterior despues
            $table->string('observation',40);
            $table->timestamps();
        });

        Schema::table('appointment', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('level_id')->references('id')->on('tleveldata');
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
        Schema::dropIfExists('appointment');
    }
}
