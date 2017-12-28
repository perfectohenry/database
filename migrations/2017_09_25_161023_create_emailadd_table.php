<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailaddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailadd', function (Blueprint $table) {// fuente de financiamiento
            $table->increments('id');
            $table->string('master_code',6);
            $table->string('email');
            // $table->string('celular',13);
            $table->string('tipo',15); // propio - institucional (o mas)
            $table->timestamps();
        });

        Schema::table('emailadd', function($table) {
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
        Schema::dropIfExists('emailadd');
    }
}
