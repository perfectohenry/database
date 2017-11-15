<?php

use Illuminate\Database\Seeder;

class TprofesiondataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tprofesiondata')->delete();
        
        \DB::table('tprofesiondata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'profesion' => 'Profesion 1',
                'observation' => 'Profesion 1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'profesion' => 'Profesion 2',
                'observation' => 'Profesion 2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
