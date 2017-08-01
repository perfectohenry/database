<?php

use Illuminate\Database\Seeder;

class TentsegdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tentsegdata')->delete();
        
        \DB::table('tentsegdata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'initials' => 'MAPFR',
                'entseg' => 'MAPFRE PERU S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:06:21',
                'updated_at' => '2017-07-19 14:06:21',
            ),
            1 => 
            array (
                'id' => 2,
                'initials' => 'PERSA',
                'entseg' => 'PERSALUD S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:06:41',
                'updated_at' => '2017-07-19 14:06:41',
            ),
            2 => 
            array (
                'id' => 3,
                'initials' => 'PACIF',
                'entseg' => 'PACIFICO S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:06:56',
                'updated_at' => '2017-07-19 14:06:56',
            ),
            3 => 
            array (
                'id' => 4,
                'initials' => 'RIMAC',
                'entseg' => 'RIMAC INTERNACIONAL S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:07:14',
                'updated_at' => '2017-07-19 14:07:14',
            ),
            4 => 
            array (
                'id' => 5,
                'initials' => 'SANIT',
                'entseg' => 'SANITAS PERU S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:07:29',
                'updated_at' => '2017-07-19 14:07:29',
            ),
            5 => 
            array (
                'id' => 6,
                'initials' => 'SRVPR',
                'entseg' => 'SERVICIOS PROPIOS',
                'observation' => 'Observaciones',
                'created_at' => '2017-07-19 14:07:56',
                'updated_at' => '2017-07-19 14:07:56',
            ),
        ));
        
        
    }
}
