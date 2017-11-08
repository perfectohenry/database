<?php

use Illuminate\Database\Seeder;

class EmailaddTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('emailadd')->delete();
        
        \DB::table('emailadd')->insert(array (
            0 => 
            array (
                'id' => 1,
                'address_id' => 2,
                'email' => 'example@example.com',
                'tipo' => 'Institucional',
                'created_at' => '2017-11-07 18:23:43',
                'updated_at' => '2017-11-07 18:24:11',
            ),
            1 => 
            array (
                'id' => 2,
                'address_id' => 2,
                'email' => 'example@unjbg.edu.pe',
                'tipo' => 'Propio',
                'created_at' => '2017-11-07 18:24:06',
                'updated_at' => '2017-11-07 18:24:06',
            ),
            2 => 
            array (
                'id' => 3,
                'address_id' => 3,
                'email' => 'example1@example.com',
                'tipo' => 'Propio',
                'created_at' => '2017-11-07 18:43:36',
                'updated_at' => '2017-11-07 18:43:36',
            ),
            3 => 
            array (
                'id' => 4,
                'address_id' => 4,
                'email' => 'example2@example.com',
                'tipo' => 'Propio',
                'created_at' => '2017-11-07 18:44:45',
                'updated_at' => '2017-11-07 18:44:45',
            ),
            4 => 
            array (
                'id' => 5,
                'address_id' => 5,
                'email' => 'example3@example.com',
                'tipo' => 'Propio',
                'created_at' => '2017-11-07 18:46:14',
                'updated_at' => '2017-11-07 18:46:14',
            ),
            5 => 
            array (
                'id' => 6,
                'address_id' => 6,
                'email' => 'example4@example.com',
                'tipo' => 'Propio',
                'created_at' => '2017-11-07 18:47:36',
                'updated_at' => '2017-11-07 18:47:36',
            ),
        ));
        
        
    }
}
