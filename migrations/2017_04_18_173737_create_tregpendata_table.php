<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTregpendataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tregpendata', function (Blueprint $table) {  // regimen pensionario
            $table->increments('id');
            $table->string('initials',5); // 19990, 20530,etc
            $table->string('regpen',40);
            $table->boolean('regcuspp'); // registra cuspp
            $table->string('observation',40);
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
        Schema::dropIfExists('tregpendata');
    }
}
