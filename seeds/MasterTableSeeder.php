<?php

use Illuminate\Database\Seeder;

class MasterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('master')->delete();
        
        \DB::table('master')->insert(array (
            0 => 
            array (
                'codigo' => 'AA7242',
                'name' => 'Anthony',
                'lastname' => 'Flores Llantoy',
                'lvlstudy_id' => 13,
                'profesion_id' => 2,
                'ocupacion_id' => 2,
                'estamento_id' => 1,
                'location_id' => 20,
                'level_id' => 13,
                'funcdir_id' => 42,
                'fiu' => '2017-04-17',
                'fie' => '2017-04-17',
                'employee_id' => NULL,
                'file' => '/img/employee/AA72421505172212.png',
                'docident_id' => 1,
                'docident_nmb' => '47839759',
                'lm' => NULL,
                'ruc' => '10478397592',
                'essalud' => '3453477HHHHH888',
                'banco_id' => 2,
                'account_id' => 3,
                'account_nmb' => '23404625404652343424',
                'cci' => '26034462044260344622',
                'life_insurance' => 1,
                'ent_id' => 4,
                'seg_id' => 2,
                'disability' => 1,
                'discp_id' => 4,
                'did' => '64545-2017',
                'syndicated' => 1,
                'sindicato_id' => 4,
                'regpen_id' => 5,
                'cuspp' => '455154ABCDE0',
                'since' => '2009-06-18',
                'until' => '2010-07-26',
                'number_license' => 'S123232000',
                'category_license' => 'A-1C',
                'sex' => 'Masculino',
                'civil_status' => 'Soltero',
                'blood_type' => 'O+',
                'birthdate' => '1993-07-17',
                'country_id' => 173,
                'city' => NULL,
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1780,
                'vivepd' => 1,
                'namep' => 'Nombre de Ejemplo Padres',
                'lastnamep' => 'Apellido del Padre',
                'vivemd' => 1,
                'namem' => 'Nombre de Ejemplo Madres',
                'lastnamem' => 'Apellido del Padre',
                'created_at' => '2017-07-21 18:08:56',
                'updated_at' => '2017-10-17 15:16:26',
            ),
            1 => 
            array (
                'codigo' => 'AR0377',
                'name' => 'Nombre',
                'lastname' => 'Apellido',
                'lvlstudy_id' => 13,
                'profesion_id' => 2,
                'ocupacion_id' => 2,
                'estamento_id' => 1,
                'location_id' => NULL,
                'level_id' => NULL,
                'funcdir_id' => NULL,
                'fiu' => NULL,
                'fie' => NULL,
                'employee_id' => NULL,
                'file' => NULL,
                'docident_id' => 1,
                'docident_nmb' => '65420321',
                'lm' => NULL,
                'ruc' => '10654213216',
                'essalud' => NULL,
                'banco_id' => 1,
                'account_id' => 1,
                'account_nmb' => '26532634542465243465',
                'cci' => '34325134325134352163',
                'life_insurance' => 0,
                'ent_id' => NULL,
                'seg_id' => NULL,
                'disability' => 0,
                'discp_id' => NULL,
                'did' => NULL,
                'syndicated' => 0,
                'sindicato_id' => NULL,
                'regpen_id' => 1,
                'cuspp' => NULL,
                'since' => NULL,
                'until' => NULL,
                'number_license' => NULL,
                'category_license' => NULL,
                'sex' => 'Masculino',
                'civil_status' => 'Soltero',
                'blood_type' => 'O+',
                'birthdate' => '1990-06-06',
                'country_id' => 173,
                'city' => NULL,
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1780,
                'vivepd' => 0,
                'namep' => 'Nombre del Padre',
                'lastnamep' => 'Apellido del Padre',
                'vivemd' => 0,
                'namem' => 'Nombre de la Madre',
                'lastnamem' => 'Apellido de la Madre',
                'created_at' => '2017-10-16 19:12:55',
                'updated_at' => '2017-10-16 19:12:55',
            ),
            2 => 
            array (
                'codigo' => 'CP5478',
                'name' => 'Nombre',
                'lastname' => 'Apellido',
                'lvlstudy_id' => 1,
                'profesion_id' => 1,
                'ocupacion_id' => 1,
                'estamento_id' => 1,
                'location_id' => 20,
                'level_id' => 13,
                'funcdir_id' => NULL,
                'fiu' => NULL,
                'fie' => NULL,
                'employee_id' => NULL,
                'file' => NULL,
                'docident_id' => 1,
                'docident_nmb' => '65406654',
                'lm' => NULL,
                'ruc' => NULL,
                'essalud' => NULL,
                'banco_id' => 1,
                'account_id' => 1,
                'account_nmb' => '23442654402635440623',
                'cci' => '36445634545063445063',
                'life_insurance' => 0,
                'ent_id' => NULL,
                'seg_id' => NULL,
                'disability' => 0,
                'discp_id' => NULL,
                'did' => NULL,
                'syndicated' => 0,
                'sindicato_id' => NULL,
                'regpen_id' => 1,
                'cuspp' => NULL,
                'since' => NULL,
                'until' => NULL,
                'number_license' => NULL,
                'category_license' => NULL,
                'sex' => 'Masculino',
                'civil_status' => 'Soltero',
                'blood_type' => 'O+',
                'birthdate' => '0000-00-00',
                'country_id' => 172,
                'city' => 'Asuncion',
                'department_id' => NULL,
                'province_id' => NULL,
                'district_id' => NULL,
                'vivepd' => 0,
                'namep' => 'Nombre',
                'lastnamep' => NULL,
                'vivemd' => 0,
                'namem' => 'Nombre',
                'lastnamem' => NULL,
                'created_at' => '2017-09-16 00:46:28',
                'updated_at' => '2017-10-05 16:58:44',
            ),
            3 => 
            array (
                'codigo' => 'RV0309',
                'name' => 'Nombre 2',
                'lastname' => 'Apellido 2',
                'lvlstudy_id' => 13,
                'profesion_id' => 2,
                'ocupacion_id' => 2,
                'estamento_id' => 1,
                'location_id' => NULL,
                'level_id' => NULL,
                'funcdir_id' => NULL,
                'fiu' => NULL,
                'fie' => NULL,
                'employee_id' => NULL,
                'file' => NULL,
                'docident_id' => 1,
                'docident_nmb' => '98746874',
                'lm' => NULL,
                'ruc' => '10645687984',
                'essalud' => NULL,
                'banco_id' => 1,
                'account_id' => 1,
                'account_nmb' => '56665654456654456654',
                'cci' => '65546766547566574567',
                'life_insurance' => 0,
                'ent_id' => NULL,
                'seg_id' => NULL,
                'disability' => 0,
                'discp_id' => NULL,
                'did' => NULL,
                'syndicated' => 0,
                'sindicato_id' => NULL,
                'regpen_id' => 1,
                'cuspp' => NULL,
                'since' => NULL,
                'until' => NULL,
                'number_license' => NULL,
                'category_license' => NULL,
                'sex' => 'Masculino',
                'civil_status' => 'Soltero',
                'blood_type' => 'O+',
                'birthdate' => '1990-06-06',
                'country_id' => 173,
                'city' => NULL,
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1780,
                'vivepd' => 0,
                'namep' => 'Nombre del Padre',
                'lastnamep' => 'Apellido del Padre',
                'vivemd' => 0,
                'namem' => 'Nombre de la Madre',
                'lastnamem' => 'Apellido de la Madre',
                'created_at' => '2017-10-16 19:14:40',
                'updated_at' => '2017-10-16 19:14:40',
            ),
            4 => 
            array (
                'codigo' => 'TG2407',
                'name' => 'Nombre 3',
                'lastname' => 'Apellido 3',
                'lvlstudy_id' => 13,
                'profesion_id' => 2,
                'ocupacion_id' => 3,
                'estamento_id' => 1,
                'location_id' => NULL,
                'level_id' => NULL,
                'funcdir_id' => NULL,
                'fiu' => NULL,
                'fie' => NULL,
                'employee_id' => NULL,
                'file' => NULL,
                'docident_id' => 1,
                'docident_nmb' => '84623218',
                'lm' => NULL,
                'ruc' => '10651216545',
                'essalud' => NULL,
                'banco_id' => 1,
                'account_id' => 1,
                'account_nmb' => '59887695478967839217',
                'cci' => '33241345645543465543',
                'life_insurance' => 0,
                'ent_id' => NULL,
                'seg_id' => NULL,
                'disability' => 0,
                'discp_id' => NULL,
                'did' => NULL,
                'syndicated' => 0,
                'sindicato_id' => NULL,
                'regpen_id' => 1,
                'cuspp' => NULL,
                'since' => NULL,
                'until' => NULL,
                'number_license' => NULL,
                'category_license' => NULL,
                'sex' => 'Masculino',
                'civil_status' => 'Soltero',
                'blood_type' => 'O+',
                'birthdate' => '1990-06-06',
                'country_id' => 173,
                'city' => NULL,
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1780,
                'vivepd' => 0,
                'namep' => 'Nombre del Padre',
                'lastnamep' => 'Apellido del Padre',
                'vivemd' => 0,
                'namem' => 'Nombre de la Madre',
                'lastnamem' => 'Apellido de la Madre',
                'created_at' => '2017-10-16 19:15:58',
                'updated_at' => '2017-10-16 19:15:58',
            ),
        ));
        
        
    }
}
