<?php

use Illuminate\Database\Seeder;

class TdocumentdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tdocumentdata')->delete();
        
        \DB::table('tdocumentdata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'initials' => 'A.CU.',
                'document' => 'Acuerdo de Consejo Universitario',
                'observation' => 'Acuerdo de Consejo Universitario',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'initials' => 'Acta',
                'document' => 'Acta',
                'observation' => 'Acta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                // 'id' => 3,
                'initials' => 'Acta D.',
                'document' => 'Acta de Defuncion',
                'observation' => 'Acta de Defuncion',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                // 'id' => 4,
                'initials' => 'Acta N.',
                'document' => 'Acta de Nacimiento',
                'observation' => 'Acta de Nacimiento',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                // 'id' => 5,
                'initials' => 'Carta',
                'document' => 'Carta',
                'observation' => 'Carta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                // 'id' => 6,
                'initials' => 'Certif.',
                'document' => 'Certificado',
                'observation' => 'Certificado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                // 'id' => 7,
                'initials' => 'Const.',
                'document' => 'Constancia',
                'observation' => 'Constancia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                // 'id' => 8,
                'initials' => 'Diploma',
                'document' => 'Diploma',
                'observation' => 'Diploma',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                // 'id' => 9,
                'initials' => 'Inf.',
                'document' => 'Informe',
                'observation' => 'Informe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                // 'id' => 10,
                'initials' => 'Mm.',
                'document' => 'Memorandum',
                'observation' => 'Memorandum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                // 'id' => 11,
                'initials' => 'Mm.Cir.',
                'document' => 'Memorandum Circular',
                'observation' => 'Memorandum Circular',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                // 'id' => 12,
                'initials' => 'Of.',
                'document' => 'Oficio',
                'observation' => 'Oficio',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                // 'id' => 13,
                'initials' => 'Of.Cir',
                'document' => 'Oficio Circular',
                'observation' => 'Oficio Circular',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                // 'id' => 14,
                'initials' => 'Otro',
                'document' => 'Otro Documento',
                'observation' => 'Otro Documento',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                // 'id' => 15,
                'initials' => 'Pap',
                'document' => 'Papeleta de Permiso',
                'observation' => 'Papeleta de Permiso',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                // 'id' => 16,
                'initials' => 'Public.',
                'document' => 'Publicación - Texto',
                'observation' => 'Publicación - Texto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                // 'id' => 17,
                'initials' => 'R.',
                'document' => 'Resolución',
                'observation' => 'Resolución',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                // 'id' => 18,
                'initials' => 'R.AU.',
                'document' => 'Resolución de Asamblea Universit.',
                'observation' => 'Resolución de Asamblea Universit.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                // 'id' => 19,
                'initials' => 'R.CF.',
                'document' => 'Resolución de Consejo de Facultad',
                'observation' => 'Resolución de Consejo de Facultad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                // 'id' => 20,
                'initials' => 'R.CU.',
                'document' => 'Resolución de Consejo Universitario',
                'observation' => 'Resolución de Consejo Universitario',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                // 'id' => 21,
                'initials' => 'R.D.',
                'document' => 'Resolución Directoral',
                'observation' => 'Resolución Directoral',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                // 'id' => 22,
                'initials' => 'R.F.',
                'document' => 'Resolución de Facultad',
                'observation' => 'Resolución de Facultad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                // 'id' => 23,
                'initials' => 'R.J.',
                'document' => 'Resolución Jefatural',
                'observation' => 'Resolución Jefatural',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                // 'id' => 24,
                'initials' => 'R.R.',
                'document' => 'Resolución Rectoral',
                'observation' => 'Resolución Rectoral',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                // 'id' => 25,
                'initials' => 'R.VIAC.',
                'document' => 'Resolución Vicerrectoral Académico',
                'observation' => 'Resolución Vicerrectoral Académico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                // 'id' => 26,
                'initials' => 'R.VIAD.',
                'document' => 'Resolución Vicerrectoral Administ.',
                'observation' => 'Resolución Vicerrectoral Administ.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                // 'id' => 27,
                'initials' => 'Solicit.',
                'document' => 'Solicitud',
                'observation' => 'Solicitud',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
