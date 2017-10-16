<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBnotroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bnotro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',20);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->string('condicion',100); // tipificar¿?
            $table->string('monto',20);
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('bnotro', function($table) {
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
        Schema::dropIfExists('bnotro');
    }
}
