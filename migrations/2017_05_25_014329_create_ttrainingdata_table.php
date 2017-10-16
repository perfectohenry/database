<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTtrainingdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttrainingdata', function (Blueprint $table) { // tipo de participacion
            $table->increments('id');
            // $table->string('initials',5);
            $table->string('training',40);
            // $table->string('observation',40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ttrainingdata');
    }
}
