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
            $table->string('doc_number',100);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->date('date_validity');
            // $table->string('attached',4);
            $table->integer('location_id')->unsigned();
            $table->integer('level_id')->unsigned(); // nivel o categoria
            $table->integer('position_id')->unsigned(); // tipo de cargo
            $table->integer('modalidad_id')->unsigned(); // puede tipificarse -- pe. CPU (tipos de contratos??
            $table->string('ing_nom_rat',15); // ingreso nombramiento o ratificacion
            $table->string('previous_after',3); // anterior despues
            $table->boolean('canceled'); // anulado
            $table->date('date_canceled')->nullable(); // fecha de anulacion
            $table->string('duration',25)->nullable();
            $table->string('years',2)->nullable();
            $table->string('months',2)->nullable();
            $table->string('days',2)->nullable();
            $table->string('doc_canceled',100)->nullable(); // documento de anulacion
            $table->boolean('fiufie'); // fiufie
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('appointment', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('level_id')->references('id')->on('tleveldata');
            $table->foreign('position_id')->references('id')->on('tpositiondata');
            $table->foreign('modalidad_id')->references('id')->on('tmodalidaddata');
            $table->foreign('location_id')->references('id')->on('tlocationdata');
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
