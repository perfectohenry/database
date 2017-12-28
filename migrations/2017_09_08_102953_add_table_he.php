<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableHe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('he', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); //id trabajador
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',100); // numro oficio
            $table->integer('mes'); // numero de mes
            $table->date('f_e',8)->nullable(); //fecha expedicion
            $table->date('f_r',8)->nullable(); //fecha recepcion
            $table->date('des',8)->nullable(); //desde
            $table->date('has',8)->nullable(); //hast
            $table->string('pro')->nullable(); //proveido
            $table->text('mot')->nullable(); //motivo
            $table->integer('tod')->default(0); //total dias
            $table->integer('prn')->default(0);
            $table->integer('nin')->default(0);
            $table->text('obs')->nullable(); //descripcion
            $table->integer('toh')->default(0);//total horas
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::table('he', function($table) {
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
        Schema::dropIfExists('he');
    }
}
