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
                'id' => 'H-001',
                'tipoha' => 'Normal',
                'observacion' => 'Ninguna',
                'particion' => 1,
                'created_at' => '2017-08-09 17:30:50',
                'updated_at' => '2017-08-09 17:30:50',
            ),
            1 => 
            array (
                'id' => 'H-002',
                'tipoha' => 'LACTANCIAI',
                'observacion' => 'LACTANCIA MATERNAL',
                'particion' => 1,
                'created_at' => '2017-08-09 17:54:18',
                'updated_at' => '2017-08-09 17:54:18',
            ),
        ));
        
        
    }
}