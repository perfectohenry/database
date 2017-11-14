<?php

use Illuminate\Database\Seeder;

class TsindicatodataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tsindicatodata')->delete();
        
        \DB::table('tsindicatodata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'sindicato' => 'Sindicato 1',
                'observation' => 'Sindicato 1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'sindicato' => 'Sindicato 2',
                'observation' => 'Sindicato 2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                // 'id' => 3,
                'sindicato' => 'Sindicato 3',
                'observation' => NULL,
                'created_at' => '20170919 02:12:19',
                'updated_at' => '20170919 02:12:19',
            ),
            3 => 
            array (
                // 'id' => 4,
                'sindicato' => 'Sindicato 4',
                'observation' => NULL,
                'created_at' => '20170919 02:12:32',
                'updated_at' => '20170919 02:12:32',
            ),
            4 => 
            array (
                // 'id' => 5,
                'sindicato' => 'Sindicato 5',
                'observation' => NULL,
                'created_at' => '20170922 01:14:45',
                'updated_at' => '20170922 01:14:45',
            ),
            5 => 
            array (
                // 'id' => 6,
                'sindicato' => 'Sindicato 6',
                'observation' => NULL,
                'created_at' => '20170922 01:26:29',
                'updated_at' => '20170922 01:26:29',
            ),
        ));
        
        
    }
}
