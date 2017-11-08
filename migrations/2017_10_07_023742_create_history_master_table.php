<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historymaster', function (Blueprint $table) {
            // identificacion personal
            $table->increments('id');
            $table->string('master_code',6);
            $table->string('name',35);
            $table->string('lastname1',35);
            $table->string('lastname2',35);
            $table->integer('lvlstudy_id')->unsigned(); // tipo de profesiones
            $table->integer('profesion_id')->unsigned(); // tipo de profesiones
            $table->integer('ocupacion_id')->unsigned(); // tipo de ocupacion

            $table->integer('estamento_id')->nullable()->unsigned(); // tipo de estamento
            $table->integer('location_id')->nullable()->unsigned(); // ubicacion
            $table->integer('level_id')->nullable()->unsigned(); // nivel
            $table->integer('funcdir_id')->nullable()->unsigned(); // funcion/directiva
            $table->date('fie')->nullable();  // fecha de ingreso al estado
            $table->date('fiu')->nullable();  // fecha de ingreso a la universidad
            $table->integer('employee_id')->nullable()->unsigned(); // tipo de trabajador (figurativo)
            $table->string('imgfile')->nullable();  // imagen
            
            //documentos
            $table->integer('docident_id')->unsigned(); // tipo de documento de identidad
            $table->string('docident_nmb',12); // dni, carnet de extranjeria, pasaporte
            $table->string('lm',10)->nullable(); // libreta militar
            $table->string('ruc',11)->nullable(); // ruc
            $table->string('essalud',15)->nullable(); // EsSALUD

            // informacion financiera
            $table->integer('banco_id')->unsigned(); // tipo de entidad financiera
            $table->integer('account_id')->unsigned(); // tipo de cuenta
            $table->string('account_nmb',20); // numero de cuenta
            $table->string('cci',20); // numero cci - cuenta interbancaria

            // regimen de salud
                // seguro de vida
                $table->boolean('life_insurance')->default(0); // si o no
                $table->integer('ent_id')->nullable()->unsigned(); // entidad aseguradora de vida
                $table->integer('seg_id')->nullable()->unsigned(); // tipo de seguro

                // discapacidad
                $table->boolean('disability')->default(0); // si o no
                $table->integer('discp_id')->nullable()->unsigned(); // tipo de discapacidad
                $table->string('did',15)->nullable(); // codigo did conadis

                // sindicalizado
                $table->boolean('syndicated')->default(0); // si o no
                // $table->string('name_union',45)->nullable(); // nombre del sindicato
                $table->integer('sindicato_id')->nullable()->unsigned(); // tipo de discapacidad

            // regimen de pensiones
            $table->integer('regpen_id')->nullable()->unsigned(); // tipo de regimen pensionario
            $table->string('cuspp',12)->nullable(); // codigo cuspp            
            $table->date('since')->nullable();  // desde
            $table->date('until')->nullable();  // hasta
            
            // mas informacion
            $table->string('number_license',10)->nullable(); // numero de licencia
            $table->string('category_license',4)->nullable(); // categoria de licencia
            $table->string('sex',10); // sexo
            $table->string('civil_status',15); // estado civil
            $table->string('blood_type',5)->nullable(); // grupo sanguineo
            $table->date('birthdate');  // fech nac
            $table->integer('country_id')->unsigned(); // pais
            $table->string('city',100)->nullable(); // ciudad
            $table->integer('department_id')->nullable()->unsigned();
            $table->integer('province_id')->nullable()->unsigned();
            $table->integer('district_id')->nullable()->unsigned();

            // datos familiares

                //padres
                $table->boolean('vivepd')->default(0); // se puede omitir
                $table->string('namep',40)->nullable();  // nombre padre
                $table->string('lastnamep',40)->nullable();  // nombre padre
                $table->boolean('vivemd')->default(0); // se puede omitir
                $table->string('namem',40)->nullable();  // nombre madre         
                $table->string('lastnamem',40)->nullable();  // nombre madre         

            $table->timestamps();
        });

        Schema::table('historymaster', function($table) {
            $table->foreign('master_code')->references('codigo')->on('master');
            $table->foreign('account_id')->references('id')->on('taccountdata');
            $table->foreign('docident_id')->references('id')->on('tdocidentdata');
            $table->foreign('banco_id')->references('id')->on('tbancodata');
            $table->foreign('regpen_id')->references('id')->on('tregpendata');
            $table->foreign('department_id')->references('id')->on('tdepartmentdata');
            $table->foreign('province_id')->references('id')->on('tprovincedata');
            $table->foreign('district_id')->references('id')->on('tdistrictdata');
            $table->foreign('ent_id')->references('id')->on('tentsegdata');
            $table->foreign('seg_id')->references('id')->on('tsegurodata');
            $table->foreign('discp_id')->references('id')->on('tdiscpdata');
            $table->foreign('estamento_id')->references('id')->on('testamentodata');
            $table->foreign('location_id')->references('id')->on('tlocationdata');
            $table->foreign('level_id')->references('id')->on('tleveldata');
            // $table->foreign('funcdir_id')->references('id')->on('tfuncdirdata');
            $table->foreign('funcdir_id')->references('id')->on('tleveldata');
            $table->foreign('employee_id')->references('id')->on('temployeedata');

            $table->foreign('country_id')->references('id')->on('tcountrydata');

            $table->foreign('profesion_id')->references('id')->on('tprofesiondata');
            $table->foreign('ocupacion_id')->references('id')->on('tocupaciondata');

            $table->foreign('sindicato_id')->references('id')->on('tsindicatodata');
            $table->foreign('lvlstudy_id')->references('id')->on('tlvlstudydata');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historymaster');
    }
}
