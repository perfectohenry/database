<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ch', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('he_id')->unsigned(); //id hora extra
            $table->string('master_code',6)->nullable(); //trabajador
            $table->date('fecha',8)->nullable();
            $table->string('in1',5)->nullable();
            $table->string('sa1',5)->nullable();
            $table->string('in2',5)->nullable();
            $table->string('sa2',5)->nullable();
            $table->string('in3',5)->nullable();
            $table->string('sa3',5)->nullable();
            $table->string('in4',5)->nullable();
            $table->string('sa4',5)->nullable();
            $table->string('thras',5)->nullable();
            $table->boolean('feria')->default(0);
            $table->timestamps();
        });

        Schema::table('ch', function($table) {
            $table->foreign('he_id')->references('id')->on('he');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ch');
    }
}
