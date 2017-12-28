<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableDLidata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dlidata', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->integer('lidata_id')->unsigned(); // tipo de licencias permisos
            $table->string('doc_number',100);
            $table->date('f_e')->nullable();
            $table->date('f_r')->nullable();
            $table->integer('pro')->nullable(); //promovido
            $table->boolean('check')->default(1); // anulado y no anulado

            $table->string('document',250)->nullable();
            // $table->string('cin',50)->nullable();
            $table->string('obs',100)->nullable();
            $table->timestamps();
        });

        Schema::table('dlidata', function($table) {
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('lidata_id')->references('id')->on('lidata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dlidata');
    }
}
