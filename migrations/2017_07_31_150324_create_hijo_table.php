<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHijoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijo', function (Blueprint $table) { // direccion
            $table->increments('id');
            $table->string('master_code',6);
            $table->string('last_name',50);
            $table->string('edad',2)->nullable();
            $table->string('sexo',10);
            $table->date('fnac');
            $table->string('doc_dni',10); // doc partida o dni
            $table->string('discp',30)->nullable()->default('Ninguno');
            $table->timestamps();
        });

        Schema::table('hijo', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hijo');
    }
}
