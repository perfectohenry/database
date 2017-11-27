<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) { // direccion
            $table->increments('id');
            $table->string('master_code',6);
            $table->string('addres',100)->nullable();  // direccion de domicilio
            $table->string('addresp',100)->nullable(); // direccion procesal
            $table->integer('country_id')->unsigned(); // pais | si(peru)=>city=null
            $table->string('city',50)->nullable(); // ciudad
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('province_id')->unsigned()->nullable();
            $table->integer('district_id')->unsigned()->nullable();
            $table->boolean('current_past'); // actual o anterior
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('address', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('country_id')->references('id')->on('tcountrydata');
            $table->foreign('department_id')->references('id')->on('tdepartmentdata');
            $table->foreign('province_id')->references('id')->on('tprovincedata');
            $table->foreign('district_id')->references('id')->on('tdistrictdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
