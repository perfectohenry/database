<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapeletaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papeleta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->time('sal');
            $table->time('ret');
            $table->date('des');
            $table->date('has');
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->integer('motivo_id')->unsigned();
            $table->integer('compensacion_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('papeleta', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('motivo_id')->references('id')->on('motivo');
            $table->foreign('compensacion_id')->references('id')->on('compensacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papeleta');
    }
}
