<?php

use Illuminate\Database\Seeder;

class TsegurodataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tsegurodata')->delete();
        
        \DB::table('tsegurodata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'initials' => 'ACCPR',
                'seguro' => 'SEGURO DE ACCIDENTES PERSONALES',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:27:53',
                'updated_at' => '2017-07-19 15:00:52',
            ),
            1 => 
            array (
                'id' => 2,
                'initials' => 'SGRVD',
                'seguro' => 'SEGURO DE VIDA',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:29:30',
                'updated_at' => '2017-07-19 14:29:30',
            ),
            2 => 
            array (
                'id' => 3,
                'initials' => 'SGENF',
                'seguro' => 'SEGURO DE SALUD O ENFERMEDAD',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:29:55',
                'updated_at' => '2017-07-19 14:29:55',
            ),
            3 => 
            array (
                'id' => 4,
                'initials' => 'SGDEP',
                'seguro' => 'SEGURO DE DEPENDENCIA',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:30:14',
                'updated_at' => '2017-07-19 14:30:14',
            ),
            4 => 
            array (
                'id' => 5,
                'initials' => 'SGAUT',
                'seguro' => 'SEGURO DE AUTOMÓVIL',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:31:44',
                'updated_at' => '2017-07-19 15:02:20',
            ),
            5 => 
            array (
                'id' => 6,
                'initials' => 'SGING',
                'seguro' => 'SEGURO DE INGENIERÍA',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:31:58',
                'updated_at' => '2017-07-19 15:04:29',
            ),
            6 => 
            array (
                'id' => 7,
                'initials' => 'SGMUL',
                'seguro' => 'SEGURO MULTIRRIESGO',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:32:13',
                'updated_at' => '2017-07-19 15:04:16',
            ),
            7 => 
            array (
                'id' => 8,
                'initials' => 'SGCRD',
                'seguro' => 'SEGURO DE CRÉDITO Y CAUCIÓN',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:32:27',
                'updated_at' => '2017-07-19 15:04:01',
            ),
            8 => 
            array (
                'id' => 9,
                'initials' => 'SGPPD',
                'seguro' => 'SEGURO DE PÉRDIDAS PECUNIARIAS DIVERSAS',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:32:47',
                'updated_at' => '2017-07-19 15:03:50',
            ),
            9 => 
            array (
                'id' => 10,
                'initials' => 'SGRBO',
                'seguro' => 'SEGURO DE ROBO',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:33:02',
                'updated_at' => '2017-07-19 15:03:41',
            ),
            10 => 
            array (
                'id' => 11,
                'initials' => 'SGTRN',
                'seguro' => 'SEGURO DE TRANSPORTES',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:33:23',
                'updated_at' => '2017-07-19 15:03:25',
            ),
            11 => 
            array (
                'id' => 12,
                'initials' => 'SGINC',
                'seguro' => 'SEGURO DE INCENDIOS',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:33:38',
                'updated_at' => '2017-07-19 15:03:15',
            ),
            12 => 
            array (
                'id' => 13,
                'initials' => 'SGRSP',
                'seguro' => 'SEGURO DE RESPONSABILIDAD CIVIL',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:33:53',
                'updated_at' => '2017-07-19 15:01:01',
            ),
            13 => 
            array (
                'id' => 14,
                'initials' => 'SGAST',
                'seguro' => 'SEGURO DE ASISTENCIA EN VIAJE',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:34:06',
                'updated_at' => '2017-07-19 15:02:34',
            ),
            14 => 
            array (
                'id' => 15,
                'initials' => 'SGDCS',
                'seguro' => 'SEGURO DE DECESOS',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:34:20',
                'updated_at' => '2017-07-19 15:01:10',
            ),
            15 => 
            array (
                'id' => 16,
                'initials' => 'SGDEF',
                'seguro' => 'SEGURO DE DEFENSA JURÍDICA',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:34:35',
                'updated_at' => '2017-07-19 15:00:27',
            ),
        ));
        
        
    }
}
