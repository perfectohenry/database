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
                'id' => 1,
                'lvlstudy' => 'Sin educacion formal',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'lvlstudy' => 'Educacion especial incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'lvlstudy' => 'Educacion especial completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'lvlstudy' => 'Educacion primaria incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'lvlstudy' => 'Educacion primaria completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'lvlstudy' => 'Educacion secundaria incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'lvlstudy' => 'Educacion secundaria completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'lvlstudy' => 'Educacion tecnica incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'lvlstudy' => 'Educacion tecnica completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
            'lvlstudy' => 'Educacion superior (Instituto superior, etc) incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
            'lvlstudy' => 'Educacion superior (Instituto superior, etc) completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'lvlstudy' => 'Educacion universitaria incompleta',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'lvlstudy' => 'Educacion universitaria completa',
                'observation' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'lvlstudy' => 'Grado de Bachiler',
                'observation' => NULL,
                'created_at' => '2017-09-18 18:24:50',
                'updated_at' => '2017-09-18 18:24:50',
            ),
            14 => 
            array (
                'id' => 15,
                'lvlstudy' => 'Titulado',
                'observation' => NULL,
                'created_at' => '2017-09-18 18:24:57',
                'updated_at' => '2017-09-18 18:24:57',
            ),
            15 => 
            array (
                'id' => 16,
                'lvlstudy' => 'Estudios de maestría incompleta',
                'observation' => NULL,
                'created_at' => '2017-09-18 18:25:09',
                'updated_at' => '2017-09-18 18:25:09',
            ),
            16 => 
            array (
                'id' => 17,
                'lvlstudy' => 'Estudios de maestría completa',
                'observation' => NULL,
                'created_at' => '2017-09-18 18:25:17',
                'updated_at' => '2017-09-18 18:25:17',
            ),
            17 => 
            array (
                'id' => 18,
                'lvlstudy' => 'Grado de maestría',
                'observation' => NULL,
                'created_at' => '2017-09-18 18:25:27',
                'updated_at' => '2017-09-18 18:25:27',
            ),
            18 => 
            array (
                'id' => 19,
                'lvlstudy' => 'Estudios de doctorado incompleto',
                'observation' => NULL,
                'created_at' => '2017-09-18 18:25:36',
                'updated_at' => '2017-09-18 18:25:36',
            ),
            19 => 
            array (
                'id' => 20,
                'lvlstudy' => 'Estudios de doctorado completo',
                'observation' => NULL,
                'created_at' => '2017-09-18 18:25:45',
                'updated_at' => '2017-09-18 18:25:45',
            ),
            20 => 
            array (
                'id' => 21,
                'lvlstudy' => 'Grado de doctor',
                'observation' => NULL,
                'created_at' => '2017-09-18 18:26:03',
                'updated_at' => '2017-09-18 18:26:03',
            ),
        ));
        
        
    }
}
