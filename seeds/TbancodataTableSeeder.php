<?php

use Illuminate\Database\Seeder;

class TbancodataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbancodata')->delete();
        
        \DB::table('tbancodata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'initials' => 'BCS',
                'banco' => 'BANCOSUR',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'initials' => 'BNX',
                'banco' => 'BANEX',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                // 'id' => 3,
                'initials' => 'BOB',
                'banco' => 'BANK OF BOSTON',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                // 'id' => 4,
                'initials' => 'BNP',
                'banco' => 'BNP PARIBAS',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                // 'id' => 5,
                'initials' => 'CRP',
                'banco' => 'CENTRAL RESERVA DEL PERU',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                // 'id' => 6,
                'initials' => 'CBP',
                'banco' => 'CITIBANK DEL PERU S.A.',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                // 'id' => 7,
                'initials' => 'CNT',
                'banco' => 'CONTINENTAL',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                // 'id' => 8,
                'initials' => 'DCO',
                'banco' => 'DE COMERCIO',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                // 'id' => 9,
                'initials' => 'DCP',
                'banco' => 'DE CREDITO DEL PERU',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                // 'id' => 10,
                'initials' => 'DLI',
                'banco' => 'DE LIMA',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                // 'id' => 11,
                'initials' => 'DLB',
                'banco' => 'DEL LIBERTADOR',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                // 'id' => 12,
                'initials' => 'DPS',
                'banco' => 'DEL PAIS',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                // 'id' => 13,
                'initials' => 'DPG',
                'banco' => 'DEL PROGRESO',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                // 'id' => 14,
                'initials' => 'DTB',
                'banco' => 'DEL TRABAJO',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                // 'id' => 15,
                'initials' => 'FDP',
                'banco' => 'FINANCIERO DEL PERU',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                // 'id' => 16,
                'initials' => 'HSBC',
                'banco' => 'HSBC BANK PERU S.A.',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                // 'id' => 17,
                'initials' => 'IFI',
                'banco' => 'INTERAMERICANO FINANZAS',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                // 'id' => 18,
                'initials' => 'INP',
                'banco' => 'INTERNACIONAL DEL PERU',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                // 'id' => 19,
                'initials' => 'LTN',
                'banco' => 'LATINO',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                // 'id' => 20,
                'initials' => 'MCT',
                'banco' => 'MERCANTIL',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                // 'id' => 21,
                'initials' => 'MBC',
                'banco' => 'MI BANCO',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                // 'id' => 22,
                'initials' => 'NAC',
                'banco' => 'NACION',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                // 'id' => 23,
                'initials' => 'NBK',
                'banco' => 'NBK BANK',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                // 'id' => 24,
                'initials' => 'NMD',
                'banco' => 'NUEVO MUNDO',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                // 'id' => 25,
                'initials' => 'ORI',
                'banco' => 'ORION',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                // 'id' => 26,
                'initials' => 'REP',
                'banco' => 'REPUBLICA',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                // 'id' => 27,
                'initials' => 'STD',
                'banco' => 'SANTANDER CENTRAL HISPANO',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                // 'id' => 28,
                'initials' => 'SER',
                'banco' => 'SERBANCO SA.',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                // 'id' => 29,
                'initials' => 'SCO',
                'banco' => 'SCOTIABANK PERU',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                // 'id' => 30,
                'initials' => 'SOL',
                'banco' => 'SOLVENTA',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                // 'id' => 31,
                'initials' => 'STC',
                'banco' => 'STANDARD CHARTERED',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                // 'id' => 32,
                'initials' => 'SUD',
                'banco' => 'SUDAMERICANO',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                // 'id' => 33,
                'initials' => 'OTR',
                'banco' => 'OTROS',
                'observation' => 'Observaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
