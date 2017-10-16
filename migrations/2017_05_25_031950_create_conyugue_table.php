<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConyugueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conyugue', function (Blueprint $table) { // padres y conyuges
            $table->increments('id');
            $table->string('master_code',6);
            $table->string('nombre',40); // nombres
            $table->string('apellido',40); // apellidos
            $table->string('dni',8); // dni
            $table->date('birthdate'); // fech de nac
            // $table->string('employment',20); // empleo del conyugue
            $table->integer('ocupacion_id')->nullable()->unsigned(); // tipo de ocupacion
            $table->integer('workcenter_id')->nullable()->unsigned(); // centro de labor
            $table->date('date_marriage')->nullable(); // fech de matri
            $table->string('marriage_certificate',40)->nullable(); // acta de matrimonio

            // $table->string('phone',13); // telefono
            // $table->string('cellphone',13)->nullable();  // celular
            // $table->string('email'); // centro de labor
            $table->timestamps();
        });

        Schema::table('conyugue', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('ocupacion_id')->references('id')->on('tocupaciondata');
            $table->foreign('workcenter_id')->references('id')->on('tworkcenterdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conyugue');
    }
}
