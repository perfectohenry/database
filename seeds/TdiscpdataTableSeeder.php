<?php

use Illuminate\Database\Seeder;

class TdiscpdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tdiscpdata')->delete();
        
        \DB::table('tdiscpdata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'initials' => 'DSCNE',
                'discp' => 'DISCAPACIDAD NO ESPECIFICA',
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:10:17',
                'updated_at' => '20170719 15:10:17',
            ),
            1 => 
            array (
                // 'id' => 2,
                'initials' => 'DSCMT',
                'discp' => 'DISCAPACIDAD MENTAL',
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:10:38',
                'updated_at' => '20170719 15:10:38',
            ),
            2 => 
            array (
                // 'id' => 3,
                'initials' => 'DSCMO',
                'discp' => 'DISCAPACIDAD MOTORA',
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:10:53',
                'updated_at' => '20170719 15:10:53',
            ),
            3 => 
            array (
                // 'id' => 4,
                'initials' => 'DSCMU',
                'discp' => 'DISCAPACIDAD MÚLTIPLES',
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:11:10',
                'updated_at' => '20170719 15:11:10',
            ),
            4 => 
            array (
                // 'id' => 5,
                'initials' => 'DSCSC',
                'discp' => 'DISCAPACIDAD SENSORIAL Y COMUNICATIVA',
                'observation' => 'Observaciones',
                'created_at' => '20170719 15:11:29',
                'updated_at' => '20170719 15:11:29',
            ),
        ));
        
        
    }
}
