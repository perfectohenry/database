<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_time', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',15);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->string('reason',45);
            $table->string('in_decrease',15); // aumento o disminucion
            $table->date('since');
            $table->date('until');
            $table->string('duration',25);
            $table->string('years',2);
            $table->string('months',2);
            $table->string('days',2);
            $table->integer('afect_id')->unsigned(); // tipo de afecto?
            $table->string('observation',40)->nullable();
            $table->string('labor_regime',6);
            $table->string('previous_after',10); // anterior o despues
            $table->timestamps();
        });

        Schema::table('service_time', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('afect_id')->references('id')->on('tafectdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_time');
    }
}
