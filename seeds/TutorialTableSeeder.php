<?php

use Illuminate\Database\Seeder;

class TutorialTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tutorial')->delete();
        
        \DB::table('tutorial')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'name' => 'Tutorial 1',
                'category' => 'Tutorial 1',
                'state' => 'Tutorial 1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'name' => 'Tutorial 2',
                'category' => 'Tutorial 2',
                'state' => 'Tutorial 2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                // 'id' => 3,
                'name' => 'Tutorial 3',
                'category' => 'Tutorial 3',
                'state' => 'Tutorial 3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                // 'id' => 4,
                'name' => 'Tutorial 4',
                'category' => 'Tutorial 4',
                'state' => 'Tutorial 4',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                // 'id' => 5,
                'name' => 'Tutorial 5',
                'category' => 'Tutorial 5',
                'state' => 'Tutorial 5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                // 'id' => 6,
                'name' => 'Tutorial 6',
                'category' => 'Tutorial 6',
                'state' => 'Tutorial 6',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                // 'id' => 7,
                'name' => 'Tutorial 7',
                'category' => 'Tutorial 7',
                'state' => 'Tutorial 7',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                // 'id' => 8,
                'name' => 'Tutorial 8',
                'category' => 'Tutorial 8',
                'state' => 'Tutorial 8',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                // 'id' => 9,
                'name' => 'Tutorial 9',
                'category' => 'Tutorial 9',
                'state' => 'Tutorial 9',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                // 'id' => 10,
                'name' => 'Tutorial 10',
                'category' => 'Tutorial 10',
                'state' => 'Tutorial 10',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                // 'id' => 11,
                'name' => 'Tutorial 11',
                'category' => 'Tutorial 11',
                'state' => 'Tutorial 11',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                // 'id' => 12,
                'name' => 'Tutorial 12',
                'category' => 'Tutorial 12',
                'state' => 'Tutorial 12',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                // 'id' => 13,
                'name' => 'Tutorial 13',
                'category' => 'Tutorial 13',
                'state' => 'Tutorial 13',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                // 'id' => 14,
                'name' => 'Tutorial 14',
                'category' => 'Tutorial 14',
                'state' => 'Tutorial 14',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                // 'id' => 15,
                'name' => 'Tutorial 15',
                'category' => 'Tutorial 15',
                'state' => 'Tutorial 15',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
