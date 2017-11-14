<?php

use Illuminate\Database\Seeder;

class TelefonoaddTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('telefonoadd')->delete();
        
        \DB::table('telefonoadd')->insert(array (
            0 => 
            array (
                // 'id' => 2,
                'address_id' => 2,
                'telefono' => '052610003',
                'tipo' => 'Fijo',
                'created_at' => '20171107 18:23:21',
                'updated_at' => '20171107 18:23:21',
            ),
            1 => 
            array (
                // 'id' => 3,
                'address_id' => 2,
                'telefono' => '052402408',
                'tipo' => 'Fijo',
                'created_at' => '20171107 18:23:30',
                'updated_at' => '20171107 18:23:30',
            ),
            2 => 
            array (
                // 'id' => 4,
                'address_id' => 3,
                'telefono' => '052145487',
                'tipo' => 'Fijo',
                'created_at' => '20171107 18:43:17',
                'updated_at' => '20171107 18:43:17',
            ),
            3 => 
            array (
                // 'id' => 5,
                'address_id' => 4,
                'telefono' => '052659865',
                'tipo' => 'Fijo',
                'created_at' => '20171107 18:44:34',
                'updated_at' => '20171107 18:44:34',
            ),
            4 => 
            array (
                // 'id' => 6,
                'address_id' => 5,
                'telefono' => '052215487',
                'tipo' => 'Fijo',
                'created_at' => '20171107 18:46:01',
                'updated_at' => '20171107 18:46:01',
            ),
            5 => 
            array (
                // 'id' => 7,
                'address_id' => 6,
                'telefono' => '052958462',
                'tipo' => 'Fijo',
                'created_at' => '20171107 18:47:19',
                'updated_at' => '20171107 18:47:19',
            ),
            6 => 
            array (
                // 'id' => 8,
                'address_id' => 7,
                'telefono' => '052985487',
                'tipo' => 'Fijo',
                'created_at' => '20171108 19:25:37',
                'updated_at' => '20171108 19:25:37',
            ),
            7 => 
            array (
                // 'id' => 9,
                'address_id' => 7,
                'telefono' => '052325487',
                'tipo' => 'Fijo',
                'created_at' => '20171108 19:25:58',
                'updated_at' => '20171108 19:25:58',
            ),
        ));
        
        
    }
}
