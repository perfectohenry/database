<?php

use Illuminate\Database\Seeder;

class LidataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lidata')->delete();
        
        \DB::table('lidata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'master_code' => 'AA0959',
                'document_id' => 12,
                'doc_number' => '108-02-UCT/OEFI',
                'f_e' => '2017-07-12',
                'f_r' => '2017-07-15',
                'pro' => 3319,
                'leave_id' => 3,
                'g_s' => 1,
                'des' => '2017-07-10',
                'has' => '2017-07-12',
                'dur' => '3',
                'obc' => 'CODIFICACION BS. OFICINA DE COORDINAC. - LIMA',
                'cin' => 'NINGUNO',
                'obs' => NULL,
                'nha' => NULL,
                'fha' => NULL,
                'sdo' => 0,
                'generate_ha' => 0,
                'created_at' => '2017-08-16 10:57:00',
                'updated_at' => '2017-08-16 10:57:00',
            ),
            1 => 
            array (
                'id' => 2,
                'master_code' => 'AA0959',
                'document_id' => 15,
                'doc_number' => '107-03-UTI/OSIS',
                'f_e' => '2017-03-22',
                'f_r' => NULL,
                'pro' => NULL,
                'leave_id' => 12,
                'g_s' => 1,
                'des' => '2017-03-22',
                'has' => '2017-03-23',
                'dur' => '2',
                'obc' => 'DRA. KATHERINE F. ROSPIGLIOSI VARGAS',
                'cin' => 'CONSTANCIA MEDICA 047 SECCION SALUD -OBUN-',
                'obs' => NULL,
                'nha' => NULL,
                'fha' => NULL,
                'sdo' => 0,
                'generate_ha' => 0,
                'created_at' => '2017-08-16 13:23:38',
                'updated_at' => '2017-08-16 13:23:38',
            ),
        ));
        
        
    }
}