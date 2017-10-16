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
            $table->integer('address_id')->unsigned();
            $table->string('telefono',13);
            // $table->string('celular',13);
            $table->string('tipo',15); // fijo - movil(cel)
            $table->timestamps();
        });

        Schema::table('telefonoadd', function($table) {
            $table->foreign('address_id')->references('id')->on('address');
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
