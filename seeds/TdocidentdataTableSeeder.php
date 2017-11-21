<?php

use Illuminate\Database\Seeder;

class TdocidentdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tdocidentdata')->delete();
        
        \DB::table('tdocidentdata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'initials' => 'DNI',
                'docident' => 'Documento Nacional de Identidad',
                'length' => 8,
                'observation' => 'Observaciones',
                'created_at' => '20170719 18:48:30',
                'updated_at' => '20170719 18:48:30',
            ),
            1 => 
            array (
                // 'id' => 2,
                'initials' => 'CE',
                'docident' => 'Carnet de Extranjeria',
                'length' => 12,
                'observation' => 'Observaciones',
                'created_at' => '20170719 18:50:40',
                'updated_at' => '20170719 18:51:55',
            ),
            2 => 
            array (
                // 'id' => 3,
                'initials' => 'PAS',
                'docident' => 'Pasaporte',
                'length' => 12,
                'observation' => 'Observaciones',
                'created_at' => '20170719 18:51:12',
                'updated_at' => '20170719 18:51:12',
            ),
        ));
        
        
    }
}
