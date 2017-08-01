<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTdistrictdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tdistrictdata', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('province_id')->unsigned(); // provincia
            $table->string('district',50);
            $table->timestamps();
        });

        Schema::table('tdistrictdata', function($table) {
            $table->foreign('province_id')->references('id')->on('tprovincedata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tdistrictdata');
    }
}
