<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableThdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thdata', function (Blueprint $table) {
            $table->string('tipoh',10)->primary()->unique();
            $table->string('tipoha',45)->nullable();
            $table->text('observacion')->nullable();
            $table->integer('particion');
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
        Schema::dropIfExists('thdata');
    }
}
