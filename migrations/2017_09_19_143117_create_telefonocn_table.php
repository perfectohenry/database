<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonocnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonocn', function (Blueprint $table) {// fuente de financiamiento
            $table->increments('id');
            $table->integer('conyugue_id')->unsigned();
            $table->string('telefono',13);
            // $table->string('celular',13);
            $table->string('tipo',15); // fijo - movil(cel)
            $table->timestamps();
        });

        Schema::table('telefonocn', function($table) {
            $table->foreign('conyugue_id')->references('id')->on('conyugue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefonocn');
    }
}
