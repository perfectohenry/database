<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableThdia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thdia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dia',10)->nullable();
            $table->time('entrada',8)->nullable();
            $table->time('salida',8)->nullable();
            $table->string('totald',5)->nullable();
            $table->boolean('trabaja')->default(1);
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
        Schema::dropIfExists('thdia');
    }
}
