<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pension', function (Blueprint $table) { // direccion
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('snp_id')->unsigned(); // tipo de sistema de pension
            $table->integer('regpen_id')->unsigned(); // tipo de regimen pensionario
            $table->string('cuspp',12)->nullable(); // codigo cuspp            
            $table->date('since')->nullable();  // desde
            $table->date('until')->nullable();  // hasta
            $table->boolean('active')->default(0); // si o no
            $table->timestamps();
        });

        Schema::table('pension', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('regpen_id')->references('id')->on('tregpendata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pension');
    }
}
