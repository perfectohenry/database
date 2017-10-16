<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTcountrydataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcountrydata', function (Blueprint $table) { // tipo de participacion
            $table->increments('id');
            $table->string('country_code',2);
            $table->string('country_name',100);
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
        Schema::dropIfExists('tcountrydata');
    }
}
