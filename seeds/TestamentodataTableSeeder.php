<?php

use Illuminate\Database\Seeder;

class TestamentodataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testamentodata')->delete();
        
        \DB::table('testamentodata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'initials' => 'ADM',
                'estamento' => 'Aministrativo',
                'observation' => 'Administrativo',
                'created_at' => '20170714 00:00:00',
                'updated_at' => '20170714 00:00:00',
            ),
            1 => 
            array (
                // 'id' => 2,
                'initials' => 'DOC',
                'estamento' => 'Docente',
                'observation' => 'Docente',
                'created_at' => '20170714 00:00:00',
                'updated_at' => '20170714 00:00:00',
            ),
        ));
        
        
    }
}
