<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableThday extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thday', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thdata_id',10);
            $table->string('dia',10)->nullable();
            $table->time('entrada1',8)->nullable();
            $table->time('salida1',8)->nullable();

            $table->time('entrada2',8)->nullable();
            $table->time('salida2',8)->nullable();
            
            $table->time('entrada3',8)->nullable();
            $table->time('salida3',8)->nullable();

            $table->time('entrada4',8)->nullable();
            $table->time('salida4',8)->nullable();

            $table->time('entrada5',8)->nullable();
            $table->time('salida5',8)->nullable();

            $table->time('entrada6',8)->nullable();
            $table->time('salida6',8)->nullable();

            $table->string('totald',5)->nullable();
            $table->boolean('trabaja')->default(1);
            $table->timestamps();

            $table->foreign('thdata_id')->references('tipoh')->on('thdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thday');
    }
}
