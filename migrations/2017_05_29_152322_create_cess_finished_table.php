<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCessFinishedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cess_finished', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',20);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->integer('termino_id')->unsigned(); // puede tipificarse
            $table->date('since')->nullable();
            $table->date('until')->nullable();
            $table->date('date_validity');
            $table->integer('position_id')->unsigned(); // tipo de cargo
            $table->integer('level_id')->unsigned(); // nivel o categoria
            $table->string('pension_sch',15);
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('cess_finished', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('position_id')->references('id')->on('tpositiondata');
            $table->foreign('level_id')->references('id')->on('tleveldata');
            $table->foreign('termino_id')->references('id')->on('tterminodata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cess_finished');
    }
}
