<?php

use Illuminate\Database\Seeder;

class TleavedataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tleavedata')->delete();
        
        \DB::table('tleavedata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'initials' => 'LAS',
                'leave' => 'LIC. POR AÑO SABATICO',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'initials' => 'LCG',
                'leave' => 'LIC. CON GOCE DE HABER',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'initials' => 'LCS',
                'leave' => 'LIC. POR COMIS. DE SERVICIO',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'initials' => 'LLI',
            'leave' => 'PERMISO POR LACTANCIA (INGRESO)',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'initials' => 'LLS',
            'leave' => 'PERMISO POR LACTANCIA (SALIDA)',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'initials' => 'LMP',
                'leave' => 'LIC. POR MOTIVOS PARTICULARES',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'initials' => 'LOT',
                'leave' => 'LIC. POR OTROS',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            7 => 
            array (
                'id' => 8,
                'initials' => 'LPC',
                'leave' => 'LIC. POR CAPACITACION',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            8 => 
            array (
                'id' => 9,
                'initials' => 'LPD',
                'leave' => 'LIC. POR DUELO',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            9 => 
            array (
                'id' => 10,
                'initials' => 'LPM',
                'leave' => 'LIC. POR MATERNIDAD',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            10 => 
            array (
                'id' => 11,
                'initials' => 'LPP',
                'leave' => 'LIC. POR PERFECCIONAMIENTO',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            11 => 
            array (
                'id' => 12,
                'initials' => 'LPS',
                'leave' => 'LIC. POR SALUD',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            12 => 
            array (
                'id' => 13,
                'initials' => 'LPV',
                'leave' => 'LIC. POR VACIONES',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            13 => 
            array (
                'id' => 14,
                'initials' => 'XXX',
                'leave' => 'INTERRRUCION DE CONTRATO',
                'observation' => 'INTERRUPCION DE CONTRATO',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            14 => 
            array (
                'id' => 15,
                'initials' => 'LSI',
                'leave' => 'LIC. SINDICAL',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            15 => 
            array (
                'id' => 16,
                'initials' => 'PAT',
                'leave' => 'LIC. POR PATERNIDAD',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            16 => 
            array (
                'id' => 17,
                'initials' => 'LSG',
                'leave' => 'LIC. SIN GOCE DE HABER',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            17 => 
            array (
                'id' => 18,
                'initials' => 'LSF',
                'leave' => 'LIC. SALUD FAMILIAR LEY 30012',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
            18 => 
            array (
                'id' => 19,
                'initials' => 'VCO',
                'leave' => 'VIGENCIA DE CONTRATO',
                'observation' => '',
                'created_at' => '2017-08-14 00:00:00',
                'updated_at' => '2017-08-14 00:00:00',
            ),
        ));
        
        
    }
}