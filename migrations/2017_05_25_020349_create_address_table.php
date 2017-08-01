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
            $table->string('place',20)->nullable();
            $table->string('addres',40);
            $table->string('phone',13)->nullable();
            $table->string('cell_phone',13)->nullable();
            $table->string('email')->nullable();
            $table->string('postal_mail',15)->nullable();
            $table->string('observation',40)->nullable();
            $table->timestamps();
        });

        Schema::table('address', function($table) {
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
        Schema::dropIfExists('address');
    }
}