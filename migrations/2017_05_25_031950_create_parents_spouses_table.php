<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsSpousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents_spouses', function (Blueprint $table) { // padres y conyuges
            $table->increments('id');
            $table->string('master_code',6);
            $table->string('spouse',40); // apellidos y nombres
            $table->string('dni',40); // dni
            $table->string('employment',20); // empleo del conyugue
            $table->string('work_center',20); // centro de labor
            $table->string('phone',15); // centro de labor
            $table->string('email'); // centro de labor
            $table->date('birthdate'); // fech de nac
            $table->date('date_marriage'); // fech de matri
            $table->string('marriage_certificate',40); // acta de matrimonio
            $table->string('name_father',40); // nombre del padre
            $table->boolean('lives_ft'); // vive? si no
            $table->string('name_mother',40); // nombre de la madre
            $table->boolean('lives_mt'); // vive? si no
            $table->string('observation',40); // observacion
            $table->timestamps();
        });

        Schema::table('parents_spouses', function($table) {
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
        Schema::dropIfExists('parents_spouses');
    }
}
