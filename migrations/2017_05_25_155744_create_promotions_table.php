<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6); // codigo
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',15);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->string('action',3); // puede tipificarse
            $table->date('date_legal_effect');
            $table->date('date_economic_effect');
            $table->integer('position_id')->unsigned(); // tipo de cargo
            $table->string('basic_compen',15);
            $table->string('score',5);
            $table->string('operative_unit',15);
            $table->string('previous_level',3); // nivel o categoria anterior 
            $table->integer('new_level_id')->unsigned(); // nivel o categoria
            $table->string('observation',40)->nullable();
            $table->timestamps();
        });

        Schema::table('promotions', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('position_id')->references('id')->on('tpositiondata');
            $table->foreign('new_level_id')->references('id')->on('tleveldata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
