<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegularizarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regularizar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('Numero',16);
            $table->date('f_e');
            $table->date('fre');
            $table->string('mot',16);
            $table->string('regu',20);//ingreso, salida, todo el dia
            $table->boolean('pro');
            $table->date('des');
            $table->date('has');
            $table->string('reg',7);
            $table->string('obs',150);
        });

        Schema::table('regularizar', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regularizar');
    }
}
