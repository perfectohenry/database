<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableLidata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lidata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);         
            $table->integer('leave_id')->unsigned(); // tipo de licencias permisos
            $table->boolean('g_s')->default(0); // con o sin goce de haber
            $table->boolean('sdo')->default(0); //procesar sabados y domingos
            // $table->boolean('licence_leave'); // licencia o permiso
            $table->date('des')->nullable();
            $table->date('has')->nullable();
            $table->string('dur',3);
            $table->boolean('anulado')->default(0); // anulado y no anulado
            $table->boolean('referencial')->default(0); // antes y no despues
            $table->string('observacion',100)->nullable();
            $table->string('lugar',100)->nullable();
            $table->string('motivo',100)->nullable();
            
            $table->string('nha',8)->nullable();
            $table->date('fha')->nullable();
            $table->boolean('generate_ha')->default(0); //hoja de accion generado
            $table->timestamps();
        });

        Schema::table('lidata', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('leave_id')->references('id')->on('tleavedata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lidata');
    }
}
