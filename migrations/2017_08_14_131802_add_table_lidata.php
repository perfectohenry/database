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
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',15);
            $table->date('f_e')->nullable();
            $table->date('f_r')->nullable();
            $table->integer('pro')->nullable();
            $table->integer('leave_id')->unsigned(); // tipo de licencias permisos
            $table->boolean('g_s')->default(0); // con o sin goce de haber
            // $table->boolean('licence_leave'); // licencia o permiso
            
            $table->date('des');
            $table->date('has');
            $table->string('dur',3);
            $table->string('obc',50)->nullable();
            $table->string('cin',50)->nullable();
            $table->string('obs',50)->nullable();
            $table->string('nha',8)->nullable();
            $table->date('fha')->nullable();
            $table->boolean('sdo')->default(0);
            $table->boolean('generate_ha')->default(0);
            $table->timestamps();
        });

        Schema::table('lidata', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
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
