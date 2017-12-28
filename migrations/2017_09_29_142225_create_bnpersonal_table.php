<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBnpersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bnpersonal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',100);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->integer('operative_unit_id')->unsigned(); // unidad operativa
            $table->integer('position_id')->unsigned(); // tipo de cargo
            $table->integer('quinquenio'); // quinquenio
            $table->date('date_validity'); // vigencia
            $table->boolean('previous_after'); // anterior o despues
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('bnpersonal', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('position_id')->references('id')->on('tpositiondata');
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
        Schema::dropIfExists('bnpersonal');
    }
}
