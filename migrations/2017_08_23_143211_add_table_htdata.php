<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableHtdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('htdata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); //id trabajador
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',100);
            $table->date('f_e',8)->nullable();
            $table->date('f_r',8)->nullable();
            $table->string('thdata_id',10); //id horario
            $table->boolean('active')->default(1); // horario activado
            $table->date('des',8)->nullable();
            $table->date('has',8)->nullable();
            $table->text('obs')->nullable();
            $table->text('other')->nullable();
            $table->string('pro',30)->nullable();
            $table->text('document')->nullable();
            $table->timestamps();
        });

        Schema::table('htdata', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('thdata_id')->references('tipoh')->on('thdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('htdata');
    }
}
