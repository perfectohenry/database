<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensionRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pension_reg', function (Blueprint $table) { // regimen de pensiones
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',15);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->date('date_val_pension');
            $table->string('reference_standard',15); // referencia a la norma
            $table->string('pension',20); // se puede tipificar?? tipo de pension
            $table->string('affiliation_name',20); // nombre de afiliacion
            $table->date('date_affiliation'); // feha de afiliacion
            $table->string('cussp',20); // cussp
            $table->boolean('disability'); // discapacidad
            $table->boolean('syndicated'); // sindicalizado
            $table->string('name_union',30); // nombre del sindicato
            $table->date('date_income_state'); // feha de ingreso al estado
            $table->date('date_expiration_state'); // feha de termino al estado
            $table->date('date_income_uni'); // feha de ingreso a la universidad 
            $table->string('observation',40)->nullable();
            $table->timestamps();
        });

        Schema::table('pension_reg', function($table) {
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
        Schema::dropIfExists('pension_reg');
    }
}
