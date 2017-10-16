<?php

use Illuminate\Database\Seeder;

class TinvestigationdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tinvestigationdata')->delete();
        
        \DB::table('tinvestigationdata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'initials' => 'TINV',
                'investigation' => 'Trabajo de Investigación',
                'observation' => 'Trabajo de Investigación',
                'created_at' => '2017-09-12 16:15:02',
                'updated_at' => '2017-09-12 16:15:02',
            ),
            1 => 
            array (
                'id' => 2,
                'initials' => 'TMON',
                'investigation' => 'Trabajo Monográfico',
                'observation' => 'Trabajo Monográfico',
                'created_at' => '2017-09-12 16:15:29',
                'updated_at' => '2017-09-12 16:15:29',
            ),
            2 => 
            array (
                'id' => 3,
                'initials' => 'TPRE',
                'investigation' => 'Trabajo Presentado',
                'observation' => 'Trabajo Presentado',
                'created_at' => '2017-09-12 16:15:57',
                'updated_at' => '2017-09-12 16:15:57',
            ),
            3 => 
            array (
                'id' => 4,
                'initials' => 'TINT',
                'investigation' => 'Trabajo Intelectual',
                'observation' => 'Trabajo Intelectual',
                'created_at' => '2017-09-12 16:16:15',
                'updated_at' => '2017-09-12 16:16:15',
            ),
            4 => 
            array (
                'id' => 5,
                'initials' => 'TIMPL',
                'investigation' => 'Trabajo de Implementación de Laboratorio',
                'observation' => 'Trabajo de Implementación de Laboratorio',
                'created_at' => '2017-09-12 16:17:11',
                'updated_at' => '2017-09-12 16:17:11',
            ),
            5 => 
            array (
                'id' => 6,
                'initials' => 'TTES',
                'investigation' => 'Trabajo de Tesis',
                'observation' => 'Trabajo de Tesis',
                'created_at' => '2017-09-12 16:17:36',
                'updated_at' => '2017-09-12 16:17:36',
            ),
            6 => 
            array (
                'id' => 7,
                'initials' => 'TUNI',
                'investigation' => 'Texto Universitario',
                'observation' => 'Texto Universitario',
                'created_at' => '2017-09-12 16:18:20',
                'updated_at' => '2017-09-12 16:18:20',
            ),
            7 => 
            array (
                'id' => 8,
                'initials' => 'TEDSC',
                'investigation' => 'Texto para Educación Secundaria',
                'observation' => 'Texto para Educación Secundaria',
                'created_at' => '2017-09-12 16:19:32',
                'updated_at' => '2017-09-12 16:19:32',
            ),
            8 => 
            array (
                'id' => 9,
                'initials' => 'TGUIA',
                'investigation' => 'Texto Guía',
                'observation' => 'Texto Guía',
                'created_at' => '2017-09-12 16:19:57',
                'updated_at' => '2017-09-12 16:19:57',
            ),
            9 => 
            array (
                'id' => 10,
                'initials' => 'TESC',
                'investigation' => 'Texto Escolar',
                'observation' => 'Texto Escolar',
                'created_at' => '2017-09-12 16:20:14',
                'updated_at' => '2017-09-12 16:20:14',
            ),
            10 => 
            array (
                'id' => 11,
                'initials' => 'TNUNI',
                'investigation' => 'Texto de Nivel Universitario',
                'observation' => 'Texto de Nivel Universitario',
                'created_at' => '2017-09-12 16:20:43',
                'updated_at' => '2017-09-12 16:20:43',
            ),
            11 => 
            array (
                'id' => 12,
                'initials' => 'TBAS',
                'investigation' => 'Texto Basico',
                'observation' => 'Texto Basico',
                'created_at' => '2017-09-12 16:21:39',
                'updated_at' => '2017-09-12 16:21:39',
            ),
            12 => 
            array (
                'id' => 13,
                'initials' => 'TAUT',
                'investigation' => 'Texto Autoinstructivo',
                'observation' => 'Texto Autoinstructivo',
                'created_at' => '2017-09-12 16:22:01',
                'updated_at' => '2017-09-12 16:22:01',
            ),
            13 => 
            array (
                'id' => 14,
                'initials' => 'TXT',
                'investigation' => 'Texto',
                'observation' => 'Texto',
                'created_at' => '2017-09-12 16:22:25',
                'updated_at' => '2017-09-12 16:22:25',
            ),
            14 => 
            array (
                'id' => 15,
                'initials' => 'TBACH',
                'investigation' => 'Tesis para optar grado de Bachiller',
                'observation' => 'Tesis para optar grado de Bachiller',
                'created_at' => '2017-09-12 16:23:08',
                'updated_at' => '2017-09-12 16:23:08',
            ),
            15 => 
            array (
                'id' => 16,
                'initials' => 'TMSTR',
                'investigation' => 'Tesis para optar grado de Maestría',
                'observation' => 'Tesis para optar grado de Maestría',
                'created_at' => '2017-09-12 16:23:33',
                'updated_at' => '2017-09-12 16:23:33',
            ),
            16 => 
            array (
                'id' => 17,
                'initials' => 'TDTR',
                'investigation' => 'Tesis para optar grado de Doctor',
                'observation' => 'Tesis para optar grado de Doctor',
                'created_at' => '2017-09-12 16:23:58',
                'updated_at' => '2017-09-12 16:23:58',
            ),
            17 => 
            array (
                'id' => 18,
                'initials' => 'TLIB',
                'investigation' => 'Temas Libres',
                'observation' => 'Temas Libres',
                'created_at' => '2017-09-12 16:24:31',
                'updated_at' => '2017-09-12 16:24:31',
            ),
            18 => 
            array (
                'id' => 19,
                'initials' => 'SYLL',
                'investigation' => 'Syllabus',
                'observation' => 'Syllabus',
                'created_at' => '2017-09-12 16:24:52',
                'updated_at' => '2017-09-12 16:24:52',
            ),
            19 => 
            array (
                'id' => 20,
                'initials' => 'SEP',
                'investigation' => 'Separatas',
                'observation' => 'Separatas',
                'created_at' => '2017-09-12 16:25:14',
                'updated_at' => '2017-09-12 16:25:14',
            ),
            20 => 
            array (
                'id' => 21,
                'initials' => 'REART',
                'investigation' => 'Revista y Articulo',
                'observation' => 'Revista y Articulo',
                'created_at' => '2017-09-12 16:25:57',
                'updated_at' => '2017-09-12 16:25:57',
            ),
            21 => 
            array (
                'id' => 22,
                'initials' => 'REVM',
                'investigation' => 'Revista Mensual',
                'observation' => 'Revista Mensual',
                'created_at' => '2017-09-12 16:26:14',
                'updated_at' => '2017-09-12 16:26:14',
            ),
            22 => 
            array (
                'id' => 23,
                'initials' => 'REMHP',
                'investigation' => 'Revista Medica Hospital H. Unanue',
                'observation' => 'Revista Medica Hospital H. Unanue',
                'created_at' => '2017-09-12 16:27:13',
                'updated_at' => '2017-09-12 16:27:13',
            ),
            23 => 
            array (
                'id' => 24,
                'initials' => 'REMBA',
                'investigation' => 'Revista Medica Basadrina',
                'observation' => 'Revista Medica Basadrina',
                'created_at' => '2017-09-12 16:27:42',
                'updated_at' => '2017-09-12 16:27:42',
            ),
            24 => 
            array (
                'id' => 25,
                'initials' => 'REVME',
                'investigation' => 'Revista Medica',
                'observation' => 'Revista Medica',
                'created_at' => '2017-09-12 16:28:17',
                'updated_at' => '2017-09-12 16:28:17',
            ),
            25 => 
            array (
                'id' => 26,
                'initials' => 'REJUD',
                'investigation' => 'Revista Juridica',
                'observation' => 'Revista Juridica',
                'created_at' => '2017-09-12 16:28:45',
                'updated_at' => '2017-09-12 16:28:45',
            ),
        ));
        
        
    }
}
