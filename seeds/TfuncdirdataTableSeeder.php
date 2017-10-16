<?php

use Illuminate\Database\Seeder;

class TfuncdirdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tfuncdirdata')->delete();
        
        \DB::table('tfuncdirdata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estamento_id' => 1,
                'initials' => 'F-1',
                'funcdir' => 'Funcion 1',
                'activo' => 1,
                'observation' => 'Funcion 1',
                'created_at' => '2017-09-12 17:28:51',
                'updated_at' => '2017-09-12 17:28:51',
            ),
            1 => 
            array (
                'id' => 2,
                'estamento_id' => 1,
                'initials' => 'F-2',
                'funcdir' => 'Funcion 2',
                'activo' => 1,
                'observation' => 'Funcion 2',
                'created_at' => '2017-09-12 17:29:10',
                'updated_at' => '2017-09-12 17:29:10',
            ),
            2 => 
            array (
                'id' => 3,
                'estamento_id' => 1,
                'initials' => 'F-3',
                'funcdir' => 'Funcion 3',
                'activo' => 1,
                'observation' => 'Funcion 3',
                'created_at' => '2017-09-12 17:29:33',
                'updated_at' => '2017-09-12 17:29:33',
            ),
            3 => 
            array (
                'id' => 4,
                'estamento_id' => 1,
                'initials' => 'F-4',
                'funcdir' => 'Funcion 4',
                'activo' => 1,
                'observation' => 'Funcion 4',
                'created_at' => '2017-09-12 17:30:16',
                'updated_at' => '2017-09-12 17:30:16',
            ),
            4 => 
            array (
                'id' => 5,
                'estamento_id' => 1,
                'initials' => 'F-5',
                'funcdir' => 'Funcion 5',
                'activo' => 1,
                'observation' => 'Funcion 5',
                'created_at' => '2017-09-12 17:30:30',
                'updated_at' => '2017-09-12 17:30:30',
            ),
            5 => 
            array (
                'id' => 6,
                'estamento_id' => 2,
                'initials' => 'D001',
                'funcdir' => 'Directiva 1',
                'activo' => 1,
                'observation' => 'Directiva 1',
                'created_at' => '2017-09-12 17:33:13',
                'updated_at' => '2017-09-12 17:33:13',
            ),
            6 => 
            array (
                'id' => 7,
                'estamento_id' => 2,
                'initials' => 'D002',
                'funcdir' => 'Directiva 2',
                'activo' => 1,
                'observation' => 'Directiva 2',
                'created_at' => '2017-09-12 17:33:32',
                'updated_at' => '2017-09-12 17:33:32',
            ),
            7 => 
            array (
                'id' => 8,
                'estamento_id' => 2,
                'initials' => 'D003',
                'funcdir' => 'Directiva 3',
                'activo' => 1,
                'observation' => 'Directiva 3',
                'created_at' => '2017-09-12 17:34:03',
                'updated_at' => '2017-09-12 17:34:03',
            ),
            8 => 
            array (
                'id' => 9,
                'estamento_id' => 2,
                'initials' => 'D004',
                'funcdir' => 'Directiva 4',
                'activo' => 1,
                'observation' => 'Directiva 4',
                'created_at' => '2017-09-12 17:34:22',
                'updated_at' => '2017-09-12 17:34:22',
            ),
        ));
        
        
    }
}
