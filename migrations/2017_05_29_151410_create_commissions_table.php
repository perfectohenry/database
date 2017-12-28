<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',100);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            // $table->string('reason',45);
            // $table->string('institution',45);
            $table->integer('reason_id')->unsigned();
            $table->integer('institution_id')->unsigned();
            $table->date('since');
            $table->date('until');
            $table->string('duration',25);
            $table->string('years',2);
            $table->string('months',2);
            $table->string('days',2);
            $table->string('previous_after',3);
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('commissions', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('institution_id')->references('id')->on('tinstitutiondata');
            $table->foreign('reason_id')->references('id')->on('treasondata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commissions');
    }
}
