<?php

use Illuminate\Database\Seeder;

class TcontractdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tcontractdata')->delete();
        
        \DB::table('tcontractdata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'initials' => 'AMP',
                'contract' => 'Ampliación de Contrato',
                'observation' => 'Ampliación de Contrato',
                'created_at' => '20170714 19:56:40',
                'updated_at' => '20170714 19:56:40',
            ),
            1 => 
            array (
                // 'id' => 2,
                'initials' => 'CPU',
                'contract' => 'Concurso Público',
                'observation' => 'Concurso Público',
                'created_at' => '20170714 19:57:14',
                'updated_at' => '20170714 19:57:14',
            ),
            2 => 
            array (
                // 'id' => 3,
                'initials' => 'CDI',
                'contract' => 'Contrato Directo',
                'observation' => 'Contrato Directo',
                'created_at' => '20170714 19:57:42',
                'updated_at' => '20170714 19:57:42',
            ),
        ));
        
        
    }
}
