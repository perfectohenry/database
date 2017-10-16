<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuniversidaddataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuniversidaddata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('universidad',100);
            $table->boolean('tipo')->default(1); // publico / privado
            $table->integer('department_id')->unsigned(); // departamento
            $table->timestamps();
        });

        Schema::table('tuniversidaddata', function($table) {
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
        Schema::dropIfExists('tuniversidaddata');
    }
}
