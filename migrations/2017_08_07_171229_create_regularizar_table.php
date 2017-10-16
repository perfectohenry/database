<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegularizarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regularizar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('nro',20);
            $table->date('f_e')->nullable();
            $table->date('fre')->nullable();
            $table->date('des');
            $table->date('has');
            $table->string('ist',1);//ingreso, salida, todo el dia
            $table->string('reg',7);
            $table->string('mot',45)->nullable();
            $table->boolean('pro'); //procede y no procede
            
            $table->string('cou',8)->nullable();
            $table->integer('npr')->default(0);
            $table->integer('mes');
            $table->string('obs',150);
        });

        Schema::table('regularizar', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regularizar');
    }
}
