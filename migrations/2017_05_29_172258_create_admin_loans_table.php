<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',20); // numero de documento
            $table->string('docfile')->nullable();
            $table->date('date_expedition'); // fecha de expedicion
            $table->string('more',45); // mas 
            $table->string('monetary_unit',45); // unidad monetaria
            $table->decimal('amount', 7, 2); // monto
            $table->string('validity',45); // validez
            $table->string('nbr_fee',45); // numero de cuotas
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('admin_loans', function($table) {
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
        Schema::dropIfExists('admin_loans');
    }
}
