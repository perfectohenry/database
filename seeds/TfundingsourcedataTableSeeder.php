<?php

use Illuminate\Database\Seeder;

class TfundingsourcedataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tfundingsourcedata')->delete();
        
        \DB::table('tfundingsourcedata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'initials' => 'RDR',
                'fundingsource' => 'Ingresos Propios',
                'observation' => 'Ingresos Propios',
                'created_at' => '2017-07-14 19:54:44',
                'updated_at' => '2017-07-14 19:54:44',
            ),
            1 => 
            array (
                'id' => 2,
                'initials' => 'RO',
                'fundingsource' => 'Tesoro Publico',
                'observation' => 'Tesoro Publico',
                'created_at' => '2017-07-14 19:55:08',
                'updated_at' => '2017-07-14 19:55:08',
            ),
        ));
        
        
    }
}
