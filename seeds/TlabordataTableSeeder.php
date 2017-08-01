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
                'initials' => 'LBR1',
                'labor' => 'Labor 1',
                'observation' => 'Labor 1',
                'created_at' => '2017-07-22 02:14:31',
                'updated_at' => '2017-07-22 02:14:31',
            ),
            1 => 
            array (
                'id' => 2,
                'initials' => 'LBR2',
                'labor' => 'Labor 2',
                'observation' => 'Labor 2',
                'created_at' => '2017-07-22 02:14:49',
                'updated_at' => '2017-07-22 02:14:49',
            ),
            2 => 
            array (
                'id' => 3,
                'initials' => 'LBR3',
                'labor' => 'Labor 3',
                'observation' => 'Labor 3',
                'created_at' => '2017-07-22 02:15:03',
                'updated_at' => '2017-07-22 02:15:03',
            ),
            3 => 
            array (
                'id' => 4,
                'initials' => 'LBR4',
                'labor' => 'Labor 4',
                'observation' => 'Labor 4',
                'created_at' => '2017-07-22 02:15:15',
                'updated_at' => '2017-07-22 02:15:15',
            ),
            4 => 
            array (
                'id' => 5,
                'initials' => 'LBR5',
                'labor' => 'Labor 5',
                'observation' => 'Labor 5',
                'created_at' => '2017-07-22 02:15:33',
                'updated_at' => '2017-07-22 02:15:33',
            ),
        ));
        
        
    }
}
