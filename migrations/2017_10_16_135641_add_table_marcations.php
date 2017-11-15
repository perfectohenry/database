<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableMarcations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->datetime('checktime');
            $table->string('sensorid',4);
            $table->string('sn',20);
            $table->timestamps();
        });
         Schema::table('marcations', function($table) {
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
        Schema::dropIfExists('marcations');
    }
}
