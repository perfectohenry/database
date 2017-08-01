<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTlocationdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tlocationdata', function (Blueprint $table) { // ubicacion
            $table->increments('id');
            $table->string('location_code',10);
            $table->string('level_1',2);
            $table->string('level_2',2);
            $table->string('level_3',2);
            $table->string('level_4',2);
            $table->string('level_5',2);
            $table->string('dependence',60);
            $table->string('initials',8);
            $table->string('observation',40);
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
        Schema::dropIfExists('tlocationdata');
    }
}
