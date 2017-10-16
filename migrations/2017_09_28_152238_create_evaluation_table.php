<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation', function (Blueprint $table) { // direccion
            $table->increments('id');
            $table->string('master_code',6);
            $table->date('evaluation_date'); // fecha de evaluacion
            $table->float('grado_titulo', 8, 2);
            $table->float('exp_lab', 8, 2);
            $table->float('exp_doc', 8, 2);
            $table->float('public', 8, 2);
            $table->float('idioma', 8, 2);
            $table->float('lab_adm', 8, 2);
            $table->float('part_cert', 8, 2);
            $table->float('part_com', 8, 2);
            $table->float('otro', 8, 2);
            $table->float('total', 8, 2);
            $table->string('observation',100)->nullable();
            $table->timestamps();
        });

        Schema::table('evaluation', function($table) {
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
        Schema::dropIfExists('evaluation');
    }
}
