<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTprovincedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tprovincedata', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned(); // departamento
            $table->string('province',50);
            $table->timestamps();
        });

        Schema::table('tprovincedata', function($table) {
            $table->foreign('department_id')->references('id')->on('tdepartmentdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tprovincedata');
    }
}
