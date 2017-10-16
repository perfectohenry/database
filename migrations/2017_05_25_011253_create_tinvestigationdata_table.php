<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinvestigationdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinvestigationdata', function (Blueprint $table) { // tipo de investigacion
            $table->increments('id');
            // $table->string('initials',5);
            $table->string('investigation',50);
            $table->boolean('reginvpub'); // inv o pub
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
        Schema::dropIfExists('tinvestigationdata');
    }
}
