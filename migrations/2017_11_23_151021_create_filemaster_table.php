<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilemasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filemaster', function (Blueprint $table) { // direccion
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('formato_id')->unsigned(); // tipo de sistema de filemaster
            $table->string('filemaster'); // ubicacion del archivo
            $table->timestamps();
        });

        Schema::table('filemaster', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('formato_id')->references('id')->on('tformatodata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filemaster');
    }
}
