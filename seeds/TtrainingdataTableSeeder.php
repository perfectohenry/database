<?php

use Illuminate\Database\Seeder;

class TtrainingdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ttrainingdata')->delete();
        
        \DB::table('ttrainingdata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'training' => 'TALLER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'training' => 'FORUM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                // 'id' => 3,
                'training' => 'TECNICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                // 'id' => 4,
                'training' => 'POST-GRADO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                // 'id' => 5,
                'training' => 'CONFERENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                // 'id' => 6,
                'training' => 'CURSO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                // 'id' => 7,
                'training' => 'SEMINARIOS-CONGRESOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                // 'id' => 8,
                'training' => 'CAPACITACION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                // 'id' => 9,
                'training' => 'DIPLOMADOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                // 'id' => 10,
                'training' => 'ESPECIALIZACION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
