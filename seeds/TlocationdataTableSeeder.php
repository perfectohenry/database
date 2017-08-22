<?php

use Illuminate\Database\Seeder;

class TlocationdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tlocationdata')->delete();
        
        \DB::table('tlocationdata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'location_code' => '050101',
                'level_1' => '05',
                'level_2' => '01',
                'level_3' => '01',
                'level_4' => '00',
                'level_5' => '00',
                'dependence' => 'SECCIÓN DE RESOLUCIONES',
                'initials' => 'RES',
                'observation' => 'OFICINA DE RESOLUCIONES',
                'created_at' => '2017-07-24 19:58:22',
                'updated_at' => '2017-07-24 19:58:22',
            ),
            1 => 
            array (
                'id' => 2,
                'location_code' => '050102',
                'level_1' => '05',
                'level_2' => '01',
                'level_3' => '02',
                'level_4' => '00',
                'level_5' => '00',
                'dependence' => 'SECCIÓN DE TRAMITE DOCUMENTARIO',
                'initials' => 'ATD',
                'observation' => 'PROCESOS TECNICOS',
                'created_at' => '2017-07-24 19:59:39',
                'updated_at' => '2017-07-24 19:59:39',
            ),
            2 => 
            array (
                'id' => 3,
                'location_code' => '050103',
                'level_1' => '05',
                'level_2' => '01',
                'level_3' => '03',
                'level_4' => '00',
                'level_5' => '00',
                'dependence' => 'SECCIÓN DE GRADOS Y TITULOS',
                'initials' => 'GYT',
                'observation' => 'PROCESOS TECNICOS',
                'created_at' => '2017-07-24 20:02:06',
                'updated_at' => '2017-07-24 20:02:06',
            ),
            3 => 
            array (
                'id' => 4,
                'location_code' => '050104',
                'level_1' => '05',
                'level_2' => '01',
                'level_3' => '04',
                'level_4' => '00',
                'level_5' => '00',
                'dependence' => 'UNIDAD DE ARCHIVO GENERAL',
                'initials' => 'AGE',
                'observation' => 'SISTEMA DE ARCHIVO',
                'created_at' => '2017-07-24 20:03:15',
                'updated_at' => '2017-07-24 20:03:15',
            ),
            4 => 
            array (
                'id' => 5,
                'location_code' => '0501',
                'level_1' => '05',
                'level_2' => '01',
                'level_3' => '00',
                'level_4' => '00',
                'level_5' => '00',
                'dependence' => 'OFICINA DE SECRETARIA GENERAL',
                'initials' => 'SEGE',
                'observation' => 'FEDETARIO INSTITUCIONAL',
                'created_at' => '2017-07-24 20:09:43',
                'updated_at' => '2017-07-24 20:10:13',
            ),
            5 => 
            array (
                'id' => 6,
                'location_code' => '0502',
                'level_1' => '05',
                'level_2' => '02',
                'level_3' => '00',
                'level_4' => '00',
                'level_5' => '00',
                'dependence' => 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN',
                'initials' => 'DGA',
                'observation' => 'GESTIÓN ADMINISTRATIVA',
                'created_at' => '2017-07-24 20:13:20',
                'updated_at' => '2017-07-24 20:13:20',
            ),
            6 => 
            array (
                'id' => 7,
                'location_code' => '0503',
                'level_1' => '05',
                'level_2' => '03',
                'level_3' => '00',
                'level_4' => '00',
                'level_5' => '00',
                'dependence' => 'OFICINA DE CONTABILIDAD',
                'initials' => 'OCT',
                'observation' => 'SISTEMA DE CONTABILIDAD',
                'created_at' => '2017-07-24 20:15:38',
                'updated_at' => '2017-07-24 20:15:38',
            ),
            7 => 
            array (
                'id' => 8,
                'location_code' => '0504',
                'level_1' => '05',
                'level_2' => '04',
                'level_3' => '00',
                'level_4' => '00',
                'level_5' => '00',
                'dependence' => 'OFICINA DE TESORERIA',
                'initials' => 'OTE',
                'observation' => 'SISTEMA DE TESORERIA',
                'created_at' => '2017-07-24 20:17:08',
                'updated_at' => '2017-07-24 20:17:08',
            ),
            8 => 
            array (
                'id' => 9,
                'location_code' => '0505',
                'level_1' => '05',
                'level_2' => '05',
                'level_3' => '00',
                'level_4' => '00',
                'level_5' => '00',
                'dependence' => 'OFICINA DE PATRIMONIO',
                'initials' => 'OPA',
                'observation' => 'OFICINA DE PATRIMONIO',
                'created_at' => '2017-07-24 20:20:00',
                'updated_at' => '2017-07-24 20:20:00',
            ),
        ));
        
        
    }
}
