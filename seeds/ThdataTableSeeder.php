<?php

use Illuminate\Database\Seeder;

class ThdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('thdata')->delete();
        
        \DB::table('thdata')->insert(array (
            0 => 
            array (
                'tipoh' => 'H-001',
                'tipoha' => 'Normal',
                'observacion' => 'Ninguna',
                'particion' => 1,
                'created_at' => '2017-08-09 17:30:50',
                'updated_at' => '2017-08-09 17:30:50',
            ),
            1 => 
            array (
                'tipoh' => 'H-002',
                'tipoha' => 'LACTANCIAI',
                'observacion' => 'LACTANCIA MATERNAL',
                'particion' => 1,
                'created_at' => '2017-08-09 17:54:18',
                'updated_at' => '2017-08-09 17:54:18',
            ),
            2 => 
            array (
                'tipoh' => 'H-003',
                'tipoha' => 'FCAG-II',
                'observacion' => 'OBS',
                'particion' => 1,
                'created_at' => '2017-08-10 18:27:21',
                'updated_at' => '2017-08-10 18:27:21',
            ),
            3 => 
            array (
                'tipoh' => 'H-004',
                'tipoha' => 'IMPREX-II',
                'observacion' => 'OBS',
                'particion' => 1,
                'created_at' => '2017-08-10 18:36:43',
                'updated_at' => '2017-08-10 18:36:43',
            ),
            4 => 
            array (
                'tipoh' => 'H-005',
                'tipoha' => 'FACF-I',
                'observacion' => 'OBS',
                'particion' => 2,
                'created_at' => '2017-08-10 18:43:57',
                'updated_at' => '2017-08-10 18:43:57',
            ),
        ));
        
        
    }
}