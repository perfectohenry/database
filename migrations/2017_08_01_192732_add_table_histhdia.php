<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableHisthdia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histhdia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thdata_id',10);
            $table->integer('thdia_id')->unsigned();
            $table->string('turno',12);
            $table->timestamps();

            $table->foreign('thdata_id')->references('tipoh')->on('thdata');
            $table->foreign('thdia_id')->references('id')->on('thdia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histhdia');
    }
}
