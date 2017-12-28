<?php

use Illuminate\Database\Seeder;

class TlvlstudydataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tlvlstudydata')->delete();
        
        \DB::table('tlvlstudydata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'lvlstudy' => 'Sin educacion formal',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'lvlstudy' => 'Educacion especial incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                // 'id' => 3,
                'lvlstudy' => 'Educacion especial completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                // 'id' => 4,
                'lvlstudy' => 'Educacion primaria incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                // 'id' => 5,
                'lvlstudy' => 'Educacion primaria completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                // 'id' => 6,
                'lvlstudy' => 'Educacion secundaria incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                // 'id' => 7,
                'lvlstudy' => 'Educacion secundaria completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                // 'id' => 8,
                'lvlstudy' => 'Educacion tecnica incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                // 'id' => 9,
                'lvlstudy' => 'Educacion tecnica completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                // 'id' => 10,
            'lvlstudy' => 'Educacion superior (Instituto superior, etc) incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                // 'id' => 11,
            'lvlstudy' => 'Educacion superior (Instituto superior, etc) completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                // 'id' => 12,
                'lvlstudy' => 'Educacion universitaria incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                // 'id' => 13,
                'lvlstudy' => 'Educacion universitaria completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
