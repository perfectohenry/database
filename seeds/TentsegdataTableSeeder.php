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
                // 'id' => '1',
                'initials' => 'MAPFR',
                'entseg' => 'MAPFRE PERU S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:06:21.000',
                'updated_at' => '20170719 14:06:21.000',
            ),
            1 => 
            array (
                // 'id' => '2',
                'initials' => 'PERSA',
                'entseg' => 'PERSALUD S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:06:41.000',
                'updated_at' => '20170719 14:06:41.000',
            ),
            2 => 
            array (
                // 'id' => '3',
                'initials' => 'PACIF',
                'entseg' => 'PACIFICO S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:06:56.000',
                'updated_at' => '20170719 14:06:56.000',
            ),
            3 => 
            array (
                // 'id' => '4',
                'initials' => 'RIMAC',
                'entseg' => 'RIMAC INTERNACIONAL S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:07:14.000',
                'updated_at' => '20170719 14:07:14.000',
            ),
            4 => 
            array (
                // 'id' => '5',
                'initials' => 'SANIT',
                'entseg' => 'SANITAS PERU S.A. EPS',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:07:29.000',
                'updated_at' => '20170719 14:07:29.000',
            ),
            5 => 
            array (
                // 'id' => '6',
                'initials' => 'SRVPR',
                'entseg' => 'SERVICIOS PROPIOS',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:07:56.000',
                'updated_at' => '20170719 14:07:56.000',
            ),
            6 => 
            array (
                // 'id' => '8',
                'initials' => 'ESSAL',
                'entseg' => 'ESSALUD',
                'observation' => 'Observaciones',
                'created_at' => '20170719 14:07:56.000',
                'updated_at' => '20170719 14:07:56.000',
            ),
        ));
        
        
    }
}
