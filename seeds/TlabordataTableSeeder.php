<?php

use Illuminate\Database\Seeder;

class TlabordataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tlabordata')->delete();
        
        \DB::table('tlabordata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'initials' => 'PROF',
                'labor' => 'Profesional',
                'observation' => 'Profesional',
                'created_at' => '2017-07-22 02:14:31',
                'updated_at' => '2017-07-22 02:14:31',
            ),
            1 => 
            array (
                'id' => 2,
                'initials' => 'DOC  ',
                'labor' => 'Docente',
                'observation' => 'Docente',
                'created_at' => '2017-07-22 02:14:49',
                'updated_at' => '2017-07-22 02:14:49',
            ),
            2 => 
            array (
                'id' => 3,
                'initials' => 'TEC',
                'labor' => 'Tecnico',
                'observation' => 'Tecnico',
                'created_at' => '2017-07-22 02:15:03',
                'updated_at' => '2017-07-22 02:15:03',
            ),
            3 => 
            array (
                'id' => 4,
                'initials' => 'LAB',
                'labor' => 'Laboral',
                'observation' => 'Laboral',
                'created_at' => '2017-07-22 02:15:15',
                'updated_at' => '2017-07-22 02:15:15',
            ),
        ));
        
        
    }
}
