<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBnfamiliarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bnfamiliar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',20);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->boolean('familiar'); // esposa o hijo
            $table->boolean('sexo'); // esposa o hijo
            $table->date('nacimiento')->nullable();
            $table->date('matrimonio')->nullable();
            $table->date('since')->nullable();
            $table->date('until')->nullable();
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('bnfamiliar', function($table) {
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
        Schema::dropIfExists('bnfamiliar');
    }
}
