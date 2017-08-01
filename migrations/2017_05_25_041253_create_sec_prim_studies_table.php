<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecPrimStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec_prim_studies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->boolean('national_inst'); // institucion nacional o extranjera
            $table->string('level_study',40);
            $table->string('institution',40);
            $table->boolean('public_private'); // publica o privada
            $table->date('date_expedition');
            $table->timestamps();
        });

        Schema::table('sec_prim_studies', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_prim_studies');
    }
}
