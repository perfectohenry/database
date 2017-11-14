<?php

use Illuminate\Database\Seeder;

class HijoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hijo')->delete();
        
        \DB::table('hijo')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'master_code' => 'AA7242',
                'last_namehj' => 'Andrea Paola FLORES MONTOYA',
                'edad' => '17',
                'sexo' => 'Femenino',
                'fnac' => '20000606',
                'doc_dnihj' => '79548765',
                'discp' => 'Ninguna',
                'created_at' => '20171105 23:40:53',
                'updated_at' => '20171107 03:29:32',
            ),
            1 => 
            array (
                // 'id' => 2,
                'master_code' => 'AA3319',
                'last_namehj' => 'Adriana Paola CUJAR ACOSTA',
                'edad' => '22',
                'sexo' => 'Femenino',
                'fnac' => '19950623',
                'doc_dnihj' => '54879861',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:24:47',
                'updated_at' => '20171107 03:24:47',
            ),
            2 => 
            array (
                // 'id' => 3,
                'master_code' => 'AA3319',
                'last_namehj' => 'Camilo Alexander CUJAR ACOSTA',
                'edad' => '19',
                'sexo' => 'Masculino',
                'fnac' => '19980520',
                'doc_dnihj' => '75847545',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:26:25',
                'updated_at' => '20171107 03:26:25',
            ),
            3 => 
            array (
                // 'id' => 4,
                'master_code' => 'AA7242',
                'last_namehj' => 'Gloria Isabel FLORES MONTOYA',
                'edad' => '26',
                'sexo' => 'Femenino',
                'fnac' => '19911016',
                'doc_dnihj' => '45875487',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:30:48',
                'updated_at' => '20171107 03:30:48',
            ),
            4 => 
            array (
                // 'id' => 5,
                'master_code' => 'AM0377',
                'last_namehj' => 'Ana Maria ACEVEDO SANTOS',
                'edad' => '21',
                'sexo' => 'Femenino',
                'fnac' => '19960718',
                'doc_dnihj' => '47985478',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:32:17',
                'updated_at' => '20171107 03:32:17',
            ),
            5 => 
            array (
                // 'id' => 6,
                'master_code' => 'AM0377',
                'last_namehj' => 'Alejandra Maria ACEVEDO SANTOS',
                'edad' => '27',
                'sexo' => 'Femenino',
                'fnac' => '19900815',
                'doc_dnihj' => '42548754',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:33:05',
                'updated_at' => '20171107 03:33:05',
            ),
            6 => 
            array (
                // 'id' => 7,
                'master_code' => 'BC5478',
                'last_namehj' => 'Amelia BÁEZ TABARES',
                'edad' => '23',
                'sexo' => 'Femenino',
                'fnac' => '19940719',
                'doc_dnihj' => '54875487',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:34:15',
                'updated_at' => '20171107 03:34:15',
            ),
            7 => 
            array (
                // 'id' => 8,
                'master_code' => 'BC5478',
                'last_namehj' => 'Noelia BÁEZ TABARES',
                'edad' => '12',
                'sexo' => 'Femenino',
                'fnac' => '20050525',
                'doc_dnihj' => '79548754',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:34:46',
                'updated_at' => '20171107 03:34:46',
            ),
            8 => 
            array (
                // 'id' => 9,
                'master_code' => 'CG0309',
                'last_namehj' => 'Diana Milena CERVANTES ZAMBRANO',
                'edad' => '22',
                'sexo' => 'Femenino',
                'fnac' => '19951130',
                'doc_dnihj' => '49548754',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:36:09',
                'updated_at' => '20171107 03:36:09',
            ),
            9 => 
            array (
                // 'id' => 10,
                'master_code' => 'CG0309',
                'last_namehj' => 'Diego Andres CERVANTES ZAMBRANO',
                'edad' => '28',
                'sexo' => 'Masculino',
                'fnac' => '19890309',
                'doc_dnihj' => '40215487',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:36:46',
                'updated_at' => '20171107 03:36:46',
            ),
            10 => 
            array (
                // 'id' => 11,
                'master_code' => 'CP5478',
                'last_namehj' => 'Ketty LOZANO CADENA',
                'edad' => '9',
                'sexo' => 'Femenino',
                'fnac' => '20080619',
                'doc_dnihj' => '84548754',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:38:27',
                'updated_at' => '20171107 03:38:27',
            ),
            11 => 
            array (
                // 'id' => 12,
                'master_code' => 'CP5478',
                'last_namehj' => 'Nestor Elias LOZANO CADENA',
                'edad' => '27',
                'sexo' => 'Masculino',
                'fnac' => '19900214',
                'doc_dnihj' => '41215487',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:39:08',
                'updated_at' => '20171107 03:39:08',
            ),
            12 => 
            array (
                // 'id' => 13,
                'master_code' => 'CP5478',
                'last_namehj' => 'Wilson LOZANO CADENA',
                'edad' => '22',
                'sexo' => 'Masculino',
                'fnac' => '19950412',
                'doc_dnihj' => '49875487',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:40:16',
                'updated_at' => '20171107 03:40:16',
            ),
            13 => 
            array (
                // 'id' => 14,
                'master_code' => 'DM2407',
                'last_namehj' => 'Gloria Rocio SANCHEZ DÁVILA',
                'edad' => '32',
                'sexo' => 'Femenino',
                'fnac' => '19850717',
                'doc_dnihj' => '32658754',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:41:23',
                'updated_at' => '20171107 03:41:23',
            ),
            14 => 
            array (
                // 'id' => 15,
                'master_code' => 'DM2407',
                'last_namehj' => 'Gustavo Alberto SANCHEZ DÁVILA',
                'edad' => '26',
                'sexo' => 'Masculino',
                'fnac' => '19910613',
                'doc_dnihj' => '43548754',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:42:14',
                'updated_at' => '20171107 03:42:14',
            ),
            15 => 
            array (
                // 'id' => 16,
                'master_code' => 'DM2407',
                'last_namehj' => 'Jenny Paola SANCHEZ DÁVILA',
                'edad' => '19',
                'sexo' => 'Femenino',
                'fnac' => '19980616',
                'doc_dnihj' => '65988754',
                'discp' => 'Ninguna',
                'created_at' => '20171107 03:43:01',
                'updated_at' => '20171107 03:43:01',
            ),
        ));
        
        
    }
}
