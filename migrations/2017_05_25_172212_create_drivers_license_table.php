<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers_license', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->string('license',15);
            $table->string('number_license',7);
            $table->date('date_expedition');
            $table->date('date_revalidation');
            $table->string('class',2);
            $table->string('category',3);
            $table->string('observation',40);
            $table->timestamps();
        });

        Schema::table('drivers_license', function($table) {
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
        Schema::dropIfExists('drivers_license');
    }
}
