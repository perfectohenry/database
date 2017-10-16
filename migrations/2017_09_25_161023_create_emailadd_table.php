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
            $table->integer('address_id')->unsigned();
            $table->string('email');
            // $table->string('celular',13);
            $table->string('tipo',15); // propio - institucional (o mas)
            $table->timestamps();
        });

        Schema::table('emailadd', function($table) {
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
        Schema::dropIfExists('emailadd');
    }
}
