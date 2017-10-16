<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailcnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailcn', function (Blueprint $table) {// fuente de financiamiento
            $table->increments('id');
            $table->integer('conyugue_id')->unsigned();
            $table->string('email');
            // $table->string('celular',13);
            $table->string('tipo',15); // propio - institucional (o mas)
            $table->timestamps();
        });

        Schema::table('emailcn', function($table) {
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
        Schema::dropIfExists('emailcn');
    }
}
