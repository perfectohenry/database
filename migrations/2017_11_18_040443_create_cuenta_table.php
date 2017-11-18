<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta', function (Blueprint $table) { // direccion
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('banco_id')->unsigned(); // tipo de entidad financiera
            $table->integer('account_id')->unsigned(); // tipo de cuenta
            $table->string('account_nmb',20); // numero de cuenta
            $table->string('cci',20); // numero cci - cuenta interbancaria
            $table->boolean('active')->default(0); // si o no
            $table->timestamps();
        });

        Schema::table('cuenta', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('banco_id')->references('id')->on('tbancodata');
            $table->foreign('account_id')->references('id')->on('taccountdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta');
    }
}
