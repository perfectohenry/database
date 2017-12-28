<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoaddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonoadd', function (Blueprint $table) {// fuente de financiamiento
            $table->increments('id');
            $table->string('master_code',6);
            $table->string('telefono',15);
            // $table->string('celular',13);
            $table->string('tipo',15); // fijo - movil(cel)
            $table->timestamps();
        });

        Schema::table('telefonoadd', function($table) {
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
        Schema::dropIfExists('telefonoadd');
    }
}
