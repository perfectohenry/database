<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master', function (Blueprint $table) {
            // identificacion personal
            $table->string('codigo', 6)->primary()->unique();
            $table->string('name',35);
            $table->string('lastname',35);
            $table->string('lvlstudy',40);
            $table->string('profession',40);
            $table->string('occupation',40);
            $table->integer('estamento_id')->nullable()->unsigned(); // tipo de estamento
            $table->integer('location_id')->nullable()->unsigned(); // ubicacion
            $table->integer('level_id')->nullable()->unsigned(); // nivel
            
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
                $table->string('name_union',45)->nullable(); // nombre del sindicato

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
            $table->string('nationality',15); // nacionalidad
            $table->integer('department_id')->unsigned();
            $table->integer('province_id')->unsigned();
            $table->integer('district_id')->unsigned();

            // datos familiares
                // conyugue
                $table->string('last_name',50)->nullable(); // apel nombre
                $table->date('birthdate1')->nullable();  // fech nac cony
                $table->date('datemarriage')->nullable();  // fech matrimonio
                $table->string('dnicy',8)->nullable();  // dni
                $table->string('marriage_certificate',20)->nullable();  // certificado de mat
                $table->string('employment',40)->nullable();  // trabajo
                $table->string('work_center',40)->nullable();  // centro de trabajo
                $table->string('phone',13)->nullable();  // telefono
                $table->string('cellphone',13)->nullable();  // celular
                $table->string('email',191)->nullable();  // email

                //padres
                $table->boolean('vivepd')->default(0); // se puede omitir
                $table->string('apl_nmbp',50)->nullable();  // nombre padre
                $table->boolean('vivemd')->default(0); // se puede omitir
                $table->string('apl_nmbm',50)->nullable();  // nombre madre         

            $table->timestamps();
        });

        Schema::table('master', function($table) {
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
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master');
    }
}
