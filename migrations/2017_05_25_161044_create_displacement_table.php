<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisplacementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('displacement', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',20);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->string('exchange_rate',3); // puede tipificarse
            $table->integer('location_origin_id')->unsigned(); // ubicacion origen
            $table->integer('location_destination_id')->unsigned(); // ubicacion destino
            // $table->string('reason_change',100); // motivo de cambio puede tipificarse
            $table->integer('motivo_id')->unsigned(); // puede tipificarse -- pe. CPU (tipos de contratos??
            $table->date('since');
            $table->date('until');
            $table->integer('new_position_id')->unsigned(); // tipo de cargo
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('displacement', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('location_origin_id')->references('id')->on('tlocationdata');
            $table->foreign('location_destination_id')->references('id')->on('tlocationdata');
            $table->foreign('new_position_id')->references('id')->on('tpositiondata');
            $table->foreign('motivo_id')->references('id')->on('tmotivodata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('displacement');
    }
}
