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
                // 'id' => 1,
                'master_code' => 'CP5478',
                'document_id' => 12,
                'doc_number' => '10802UCT/OEFI',
                'f_e' => '20170712',
                'f_r' => '20170715',
                'pro' => 3319,
                'leave_id' => 3,
                'g_s' => 1,
                'des' => '20170710',
                'has' => '20170712',
                'dur' => '3',
                'obc' => 'CODIFICACION BS. OFICINA DE COORDINAC.  LIMA',
                'cin' => 'NINGUNO',
                'obs' => NULL,
                'nha' => NULL,
                'fha' => NULL,
                'sdo' => 0,
                'generate_ha' => 0,
                'created_at' => '20170816 10:57:00',
                'updated_at' => '20170816 10:57:00',
            ),
            1 => 
            array (
                // 'id' => 2,
                'master_code' => 'CP5478',
                'document_id' => 15,
                'doc_number' => '10703UTI/OSIS',
                'f_e' => '20170322',
                'f_r' => NULL,
                'pro' => NULL,
                'leave_id' => 12,
                'g_s' => 1,
                'des' => '20170322',
                'has' => '20170323',
                'dur' => '2',
                'obc' => 'DRA. KATHERINE F. ROSPIGLIOSI VARGAS',
                'cin' => 'CONSTANCIA MEDICA 047 SECCION SALUD OBUN',
                'obs' => NULL,
                'nha' => NULL,
                'fha' => NULL,
                'sdo' => 0,
                'generate_ha' => 0,
                'created_at' => '20170816 13:23:38',
                'updated_at' => '20170816 13:23:38',
            ),
        ));
        
        
    }
}