<?php

use Illuminate\Database\Seeder;

class TregpendataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tregpendata')->delete();
        
        \DB::table('tregpendata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'initials' => '19990',
                'regpen' => 'DECRETO DE LEY 19990 - ONP',
                'regcuspp' => 0,
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:31:46',
                'updated_at' => '20170719 15:31:46',
            ),
            1 => 
            array (
                // 'id' => 2,
                'initials' => '20530',
                'regpen' => 'DECRETO DE LEY 20530',
                'regcuspp' => 0,
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:32:14',
                'updated_at' => '20170719 15:32:45',
            ),
            2 => 
            array (
                // 'id' => 3,
                'initials' => 'SPINT',
                'regpen' => 'AFP INTEGRA',
                'regcuspp' => 1,
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:32:38',
                'updated_at' => '20170719 15:32:50',
            ),
            3 => 
            array (
                // 'id' => 4,
                'initials' => 'SPHRZ',
                'regpen' => 'AFP HORIZONTE',
                'regcuspp' => 1,
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:33:11',
                'updated_at' => '20170719 15:33:11',
            ),
            4 => 
            array (
                // 'id' => 5,
                'initials' => 'SPPFT',
                'regpen' => 'AFP PROFUTURO',
                'regcuspp' => 1,
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:33:28',
                'updated_at' => '20170719 15:33:28',
            ),
            5 => 
            array (
                // 'id' => 6,
                'initials' => 'SPPRM',
                'regpen' => 'AFP PRIMA',
                'regcuspp' => 1,
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:33:42',
                'updated_at' => '20170719 15:33:42',
            ),
            6 => 
            array (
                // 'id' => 7,
                'initials' => 'PDERP',
                'regpen' => 'PENDIENTE DE ELECCION DE REGIMEN PENSION',
                'regcuspp' => 0,
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:34:41',
                'updated_at' => '20170719 15:35:40',
            ),
            7 => 
            array (
                // 'id' => 8,
                'initials' => 'SREGP',
                'regpen' => 'SIN REGIMEN PENSIONARIO',
                'regcuspp' => 0,
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:35:02',
                'updated_at' => '20170719 15:35:02',
            ),
        ));
        
        
    }
}
