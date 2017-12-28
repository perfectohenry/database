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
                // 'id' => '1',
                'initials' => 'ACCPR',
                'seguro' => 'SEGURO DE ACCIDENTES PERSONALES',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:27:53.000',
                'updated_at' => '20170719 15:00:52.000',
            ),
            1 => 
            array (
                // 'id' => '2',
                'initials' => 'SGRVD',
                'seguro' => 'SEGURO DE VIDA',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:29:30.000',
                'updated_at' => '20170719 14:29:30.000',
            ),
            2 => 
            array (
                // 'id' => '3',
                'initials' => 'SGENF',
                'seguro' => 'SEGURO DE SALUD O ENFERMEDAD',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:29:55.000',
                'updated_at' => '20170719 14:29:55.000',
            ),
            3 => 
            array (
                // 'id' => '4',
                'initials' => 'SGDEP',
                'seguro' => 'SEGURO DE DEPENDENCIA',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:30:14.000',
                'updated_at' => '20170719 14:30:14.000',
            ),
            4 => 
            array (
                // 'id' => '5',
                'initials' => 'SGAUT',
                'seguro' => 'SEGURO DE AUTOMÓVIL',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:31:44.000',
                'updated_at' => '20170719 15:02:20.000',
            ),
            5 => 
            array (
                // 'id' => '6',
                'initials' => 'SGING',
                'seguro' => 'SEGURO DE INGENIERÍA',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:31:58.000',
                'updated_at' => '20170719 15:04:29.000',
            ),
            6 => 
            array (
                // 'id' => '7',
                'initials' => 'SGMUL',
                'seguro' => 'SEGURO MULTIRRIESGO',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:32:13.000',
                'updated_at' => '20170719 15:04:16.000',
            ),
            7 => 
            array (
                // 'id' => '8',
                'initials' => 'SGCRD',
                'seguro' => 'SEGURO DE CRÉDITO Y CAUCIÓN',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:32:27.000',
                'updated_at' => '20170719 15:04:01.000',
            ),
            8 => 
            array (
                // 'id' => '9',
                'initials' => 'SGPPD',
                'seguro' => 'SEGURO DE PÉRDIDAS PECUNIARIAS DIVERSAS',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:32:47.000',
                'updated_at' => '20170719 15:03:50.000',
            ),
            9 => 
            array (
                // 'id' => '10',
                'initials' => 'SGRBO',
                'seguro' => 'SEGURO DE ROBO',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:33:02.000',
                'updated_at' => '20170719 15:03:41.000',
            ),
            10 => 
            array (
                // 'id' => '11',
                'initials' => 'SGTRN',
                'seguro' => 'SEGURO DE TRANSPORTES',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:33:23.000',
                'updated_at' => '20170719 15:03:25.000',
            ),
            11 => 
            array (
                // 'id' => '12',
                'initials' => 'SGINC',
                'seguro' => 'SEGURO DE INCENDIOS',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:33:38.000',
                'updated_at' => '20170719 15:03:15.000',
            ),
            12 => 
            array (
                // 'id' => '13',
                'initials' => 'SGRSP',
                'seguro' => 'SEGURO DE RESPONSABILIDAD CIVIL',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:33:53.000',
                'updated_at' => '20170719 15:01:01.000',
            ),
            13 => 
            array (
                // 'id' => '14',
                'initials' => 'SGAST',
                'seguro' => 'SEGURO DE ASISTENCIA EN VIAJE',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:34:06.000',
                'updated_at' => '20170719 15:02:34.000',
            ),
            14 => 
            array (
                // 'id' => '15',
                'initials' => 'SGDCS',
                'seguro' => 'SEGURO DE DECESOS',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:34:20.000',
                'updated_at' => '20170719 15:01:10.000',
            ),
            15 => 
            array (
                // 'id' => '16',
                'initials' => 'SGDEF',
                'seguro' => 'SEGURO DE DEFENSA JURÍDICA',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:34:35.000',
                'updated_at' => '20170719 15:00:27.000',
            ),
            16 => 
            array (
                // 'id' => '18',
                'initials' => '+VSAC',
                'seguro' => '+VIDA SEGURO DE ACCIDENTES',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:34:35.000',
                'updated_at' => '20170719 15:00:27.000',
            ),
        ));
        
        
    }
}
