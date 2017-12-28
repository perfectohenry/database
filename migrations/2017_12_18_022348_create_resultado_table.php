<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',6);
            $table->integer('appyears');
            $table->integer('appmonths');
            $table->integer('appdays');
            $table->integer('aumyears');
            $table->integer('aummonths');
            $table->integer('aumdays');
            $table->integer('disyears');
            $table->integer('dismonths');
            $table->integer('disdays');
            $table->integer('years');
            $table->integer('months');
            $table->integer('days');
            $table->integer('cts');
            // $table->timestamps();
        });

        Schema::table('resultado', function($table) {
            $table->foreign('codigo')->references('codigo')->on('master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultado');
    }
}
