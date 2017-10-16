<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTdemeritdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tdemeritdata', function (Blueprint $table) {  // regimen pensionario
            $table->increments('id');
            // $table->string('initials',5); // 19990, 20530,etc
            $table->string('demerit',50);
            $table->boolean('regdeme'); // registra cuspp
            $table->string('observation',100);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tdemeritdata');
    }
}
