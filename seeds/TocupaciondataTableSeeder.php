<?php

use Illuminate\Database\Seeder;

class TocupaciondataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tocupaciondata')->delete();
        
        \DB::table('tocupaciondata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ocupacion' => 'Ocupacion 1',
                'observation' => 'Ocupacion 1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ocupacion' => 'Ocupacion 2',
                'observation' => 'Ocupacion 2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ocupacion' => 'Ocupacion 3',
                'observation' => NULL,
                'created_at' => '2017-09-26 00:29:19',
                'updated_at' => '2017-09-26 00:29:19',
            ),
        ));
        
        
    }
}
