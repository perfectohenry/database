<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('master_code',6);
            $table->integer('document_id')->unsigned(); // tipo de documento
            $table->string('doc_number',20);
            $table->string('docfile')->nullable();
            $table->date('date_expedition');
            $table->string('inv_pub',3); // investigacion o publicacion
            $table->string('previous_after',3);
            $table->integer('investigation_id')->unsigned(); // tipo de publicaciones
            $table->string('title',100);
            $table->string('dinaregina',3); // registra pub en dina-regina
            $table->string('regcode',50)->nullable(); // codigo de registro
            $table->string('observation',500)->nullable();
            $table->timestamps();
        });

        Schema::table('publications', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('document_id')->references('id')->on('tdocumentdata');
            $table->foreign('investigation_id')->references('id')->on('tinvestigationdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
