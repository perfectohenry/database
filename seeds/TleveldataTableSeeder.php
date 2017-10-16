<?php

use Illuminate\Database\Seeder;

class TleveldataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tleveldata')->delete();
        
        \DB::table('tleveldata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estamento_id' => 1,
                'leveltype_id' => 2,
                'initials' => 'SPA',
                'level' => 'Servidor Profesional A',
                'activo' => 1,
                'observation' => 'Servidor Profesional A',
                'created_at' => '2017-07-14 15:03:57',
                'updated_at' => '2017-07-14 18:24:28',
            ),
            1 => 
            array (
                'id' => 2,
                'estamento_id' => 1,
                'leveltype_id' => 2,
                'initials' => 'SPB',
                'level' => 'Servidor Profesional B',
                'activo' => 1,
                'observation' => 'Servidor Profesional B',
                'created_at' => '2017-07-14 15:04:15',
                'updated_at' => '2017-07-14 15:08:18',
            ),
            2 => 
            array (
                'id' => 3,
                'estamento_id' => 1,
                'leveltype_id' => 2,
                'initials' => 'SPC',
                'level' => 'Servidor Profesional C',
                'activo' => 1,
                'observation' => 'Servidor Profesional C',
                'created_at' => '2017-07-14 15:04:36',
                'updated_at' => '2017-07-14 15:08:32',
            ),
            3 => 
            array (
                'id' => 4,
                'estamento_id' => 1,
                'leveltype_id' => 2,
                'initials' => 'SPD',
                'level' => 'Servidor Profesional D',
                'activo' => 1,
                'observation' => 'Servidor Profesional D',
                'created_at' => '2017-07-14 15:04:52',
                'updated_at' => '2017-07-14 15:09:19',
            ),
            4 => 
            array (
                'id' => 5,
                'estamento_id' => 1,
                'leveltype_id' => 2,
                'initials' => 'SPE',
                'level' => 'Servidor Profesional E',
                'activo' => 1,
                'observation' => 'Servidor Profesional E',
                'created_at' => '2017-07-14 15:05:06',
                'updated_at' => '2017-07-14 15:09:33',
            ),
            5 => 
            array (
                'id' => 6,
                'estamento_id' => 1,
                'leveltype_id' => 3,
                'initials' => 'STA',
                'level' => 'Servidor Tecnico A',
                'activo' => 1,
                'observation' => 'Servidor Tecnico A',
                'created_at' => '2017-07-14 15:05:26',
                'updated_at' => '2017-07-14 15:05:26',
            ),
            6 => 
            array (
                'id' => 7,
                'estamento_id' => 1,
                'leveltype_id' => 3,
                'initials' => 'STB',
                'level' => 'Servidor Tecnico B',
                'activo' => 1,
                'observation' => 'Servidor Tecnico B',
                'created_at' => '2017-07-14 15:05:46',
                'updated_at' => '2017-07-14 15:05:46',
            ),
            7 => 
            array (
                'id' => 8,
                'estamento_id' => 1,
                'leveltype_id' => 3,
                'initials' => 'STC',
                'level' => 'Servidor Tecnico C',
                'activo' => 1,
                'observation' => 'Servidor Tecnico C',
                'created_at' => '2017-07-14 15:06:05',
                'updated_at' => '2017-07-14 15:06:05',
            ),
            8 => 
            array (
                'id' => 9,
                'estamento_id' => 1,
                'leveltype_id' => 3,
                'initials' => 'STD',
                'level' => 'Servidor Tecnico D',
                'activo' => 1,
                'observation' => 'Servidor Tecnico D',
                'created_at' => '2017-07-14 15:06:23',
                'updated_at' => '2017-07-14 15:06:23',
            ),
            9 => 
            array (
                'id' => 10,
                'estamento_id' => 1,
                'leveltype_id' => 3,
                'initials' => 'STE',
                'level' => 'Servidor Tecnico E',
                'activo' => 1,
                'observation' => 'Servidor Tecnico E',
                'created_at' => '2017-07-14 15:06:39',
                'updated_at' => '2017-07-14 15:06:39',
            ),
            10 => 
            array (
                'id' => 11,
                'estamento_id' => 1,
                'leveltype_id' => 4,
                'initials' => 'SAA',
                'level' => 'Servidor Auxiliar A',
                'activo' => 1,
                'observation' => 'Servidor Auxiliar A',
                'created_at' => '2017-07-14 15:10:51',
                'updated_at' => '2017-07-14 15:10:51',
            ),
            11 => 
            array (
                'id' => 12,
                'estamento_id' => 1,
                'leveltype_id' => 4,
                'initials' => 'SAB',
                'level' => 'Servidor Auxiliar B',
                'activo' => 1,
                'observation' => 'Servidor Auxiliar B',
                'created_at' => '2017-07-14 15:11:03',
                'updated_at' => '2017-07-14 15:11:03',
            ),
            12 => 
            array (
                'id' => 13,
                'estamento_id' => 1,
                'leveltype_id' => 4,
                'initials' => 'SAC',
                'level' => 'Servidor Auxiliar C',
                'activo' => 1,
                'observation' => 'Servidor Auxiliar C',
                'created_at' => '2017-07-14 15:11:16',
                'updated_at' => '2017-07-14 15:11:16',
            ),
            13 => 
            array (
                'id' => 14,
                'estamento_id' => 1,
                'leveltype_id' => 4,
                'initials' => 'SAD',
                'level' => 'Servidor Auxiliar D',
                'activo' => 1,
                'observation' => 'Servidor Auxiliar D',
                'created_at' => '2017-07-14 15:11:26',
                'updated_at' => '2017-07-14 15:11:26',
            ),
            14 => 
            array (
                'id' => 15,
                'estamento_id' => 1,
                'leveltype_id' => 4,
                'initials' => 'SAE',
                'level' => 'Servidor Auxiliar E',
                'activo' => 1,
                'observation' => 'Servidor Auxiliar E',
                'created_at' => '2017-07-14 15:11:36',
                'updated_at' => '2017-07-14 15:11:36',
            ),
            15 => 
            array (
                'id' => 16,
                'estamento_id' => 2,
                'leveltype_id' => 5,
                'initials' => 'PDE',
                'level' => 'Principal Dedicación Exclusiva',
                'activo' => 1,
                'observation' => 'Principal Dedicación Exclusiva',
                'created_at' => '2017-07-14 18:27:21',
                'updated_at' => '2017-07-14 18:27:21',
            ),
            16 => 
            array (
                'id' => 17,
                'estamento_id' => 2,
                'leveltype_id' => 6,
                'initials' => 'ADE',
                'level' => 'Asociado Dedicación Exclusiva',
                'activo' => 1,
                'observation' => 'Asociado Dedicación Exclusiva',
                'created_at' => '2017-07-14 18:28:01',
                'updated_at' => '2017-07-14 18:28:40',
            ),
            17 => 
            array (
                'id' => 19,
                'estamento_id' => 2,
                'leveltype_id' => 7,
                'initials' => 'XDE',
                'level' => 'Auxiliar Dedicación Exclusiva',
                'activo' => 1,
                'observation' => 'Auxiliar Dedicación Exclusiva',
                'created_at' => '2017-07-14 18:29:54',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'id' => 20,
                'estamento_id' => 2,
                'leveltype_id' => 8,
                'initials' => 'JDE',
                'level' => 'Jefe de Practicas Dedicación Exclusiva',
                'activo' => 1,
                'observation' => 'Jefe de Practicas Dedicación Exclusiva',
                'created_at' => '2017-07-14 18:32:05',
                'updated_at' => '2017-07-14 18:32:05',
            ),
            19 => 
            array (
                'id' => 21,
                'estamento_id' => 2,
                'leveltype_id' => 5,
                'initials' => 'PTC',
                'level' => 'Principal Tiempo Completo',
                'activo' => 1,
                'observation' => 'Principal Tiempo Completo',
                'created_at' => '2017-07-14 18:32:54',
                'updated_at' => '2017-07-14 18:32:54',
            ),
            20 => 
            array (
                'id' => 22,
                'estamento_id' => 2,
                'leveltype_id' => 6,
                'initials' => 'ATC',
                'level' => 'Asociado Tiempo Completo',
                'activo' => 1,
                'observation' => 'Asociado Tiempo Completo',
                'created_at' => '2017-07-14 18:33:20',
                'updated_at' => '2017-07-14 18:33:20',
            ),
            21 => 
            array (
                'id' => 23,
                'estamento_id' => 2,
                'leveltype_id' => 7,
                'initials' => 'XTC',
                'level' => 'Auxiliar Tiempo Completo',
                'activo' => 1,
                'observation' => 'Auxiliar Tiempo Completo',
                'created_at' => '2017-07-14 18:33:50',
                'updated_at' => '2017-07-14 18:33:50',
            ),
            22 => 
            array (
                'id' => 24,
                'estamento_id' => 2,
                'leveltype_id' => 8,
                'initials' => 'JTC',
                'level' => 'Jefe de Practicas Tiempo Completo',
                'activo' => 1,
                'observation' => 'Jefe de Practicas Tiempo Completo',
                'created_at' => '2017-07-14 18:34:13',
                'updated_at' => '2017-07-14 18:34:13',
            ),
            23 => 
            array (
                'id' => 25,
                'estamento_id' => 2,
                'leveltype_id' => 5,
                'initials' => 'P20',
                'level' => 'Principal 20',
                'activo' => 1,
                'observation' => 'Principal 20',
                'created_at' => '2017-07-14 18:34:42',
                'updated_at' => '2017-07-14 18:34:42',
            ),
            24 => 
            array (
                'id' => 26,
                'estamento_id' => 2,
                'leveltype_id' => 5,
                'initials' => 'P15',
                'level' => 'Principal 15',
                'activo' => 1,
                'observation' => 'Principal 15',
                'created_at' => '2017-07-14 18:35:33',
                'updated_at' => '2017-07-14 18:35:33',
            ),
            25 => 
            array (
                'id' => 27,
                'estamento_id' => 2,
                'leveltype_id' => 5,
                'initials' => 'P10',
                'level' => 'Principal 10',
                'activo' => 1,
                'observation' => 'Principal 10',
                'created_at' => '2017-07-14 18:35:52',
                'updated_at' => '2017-07-14 18:35:52',
            ),
            26 => 
            array (
                'id' => 29,
                'estamento_id' => 2,
                'leveltype_id' => 6,
                'initials' => 'A20',
                'level' => 'Asociado 20',
                'activo' => 1,
                'observation' => 'Asociado 20',
                'created_at' => '2017-07-14 18:36:42',
                'updated_at' => '2017-07-14 18:36:42',
            ),
            27 => 
            array (
                'id' => 30,
                'estamento_id' => 2,
                'leveltype_id' => 6,
                'initials' => 'A15',
                'level' => 'Asociado 15',
                'activo' => 1,
                'observation' => 'Asociado 15',
                'created_at' => '2017-07-14 18:37:00',
                'updated_at' => '2017-07-14 18:37:00',
            ),
            28 => 
            array (
                'id' => 31,
                'estamento_id' => 2,
                'leveltype_id' => 6,
                'initials' => 'A10',
                'level' => 'Asociado 10',
                'activo' => 1,
                'observation' => 'Asociado 10',
                'created_at' => '2017-07-14 18:37:16',
                'updated_at' => '2017-07-14 18:37:16',
            ),
            29 => 
            array (
                'id' => 32,
                'estamento_id' => 2,
                'leveltype_id' => 7,
                'initials' => 'X20',
                'level' => 'Auxiliar 20',
                'activo' => 1,
                'observation' => 'Auxiliar 20',
                'created_at' => '2017-07-14 18:37:38',
                'updated_at' => '2017-07-14 18:37:38',
            ),
            30 => 
            array (
                'id' => 33,
                'estamento_id' => 2,
                'leveltype_id' => 7,
                'initials' => 'X15',
                'level' => 'Auxiliar 15',
                'activo' => 1,
                'observation' => 'Auxiliar 15',
                'created_at' => '2017-07-14 18:37:55',
                'updated_at' => '2017-07-14 18:37:55',
            ),
            31 => 
            array (
                'id' => 34,
                'estamento_id' => 2,
                'leveltype_id' => 7,
                'initials' => 'X10',
                'level' => 'Auxiliar 10',
                'activo' => 1,
                'observation' => 'Auxiliar 10',
                'created_at' => '2017-07-14 18:39:34',
                'updated_at' => '2017-07-14 18:39:34',
            ),
            32 => 
            array (
                'id' => 35,
                'estamento_id' => 2,
                'leveltype_id' => 8,
                'initials' => 'J20',
                'level' => 'Jefe de Practicas 20',
                'activo' => 1,
                'observation' => 'Jefe de Practicas 20',
                'created_at' => '2017-07-14 18:39:53',
                'updated_at' => '2017-07-14 18:39:53',
            ),
            33 => 
            array (
                'id' => 36,
                'estamento_id' => 2,
                'leveltype_id' => 8,
                'initials' => 'J15',
                'level' => 'Jefe de Practicas 15',
                'activo' => 1,
                'observation' => 'Jefe de Practicas 15',
                'created_at' => '2017-07-14 18:40:10',
                'updated_at' => '2017-07-14 18:40:10',
            ),
            34 => 
            array (
                'id' => 37,
                'estamento_id' => 2,
                'leveltype_id' => 8,
                'initials' => 'J10',
                'level' => 'Jefe de Practicas 10',
                'activo' => 1,
                'observation' => 'Jefe de Practicas 10',
                'created_at' => '2017-07-14 18:41:34',
                'updated_at' => '2017-07-14 18:41:34',
            ),
            35 => 
            array (
                'id' => 38,
                'estamento_id' => 1,
                'leveltype_id' => 1,
                'initials' => 'F-1',
                'level' => 'Funcion 1',
                'activo' => 1,
                'observation' => 'Funcion 1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 39,
                'estamento_id' => 1,
                'leveltype_id' => 1,
                'initials' => 'F-2',
                'level' => 'Funcion 2',
                'activo' => 1,
                'observation' => 'Funcion 2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 40,
                'estamento_id' => 1,
                'leveltype_id' => 1,
                'initials' => 'F-3',
                'level' => 'Funcion 3',
                'activo' => 1,
                'observation' => 'Funcion 3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 41,
                'estamento_id' => 1,
                'leveltype_id' => 1,
                'initials' => 'F-4',
                'level' => 'Funcion 4',
                'activo' => 1,
                'observation' => 'Funcion 4',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 42,
                'estamento_id' => 1,
                'leveltype_id' => 1,
                'initials' => 'F-5',
                'level' => 'Funcion 5',
                'activo' => 1,
                'observation' => 'Funcion 5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 43,
                'estamento_id' => 2,
                'leveltype_id' => 9,
                'initials' => 'D001',
                'level' => 'Rector',
                'activo' => 1,
                'observation' => 'Rector',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 44,
                'estamento_id' => 2,
                'leveltype_id' => 9,
                'initials' => 'D002',
                'level' => 'Vicerrector',
                'activo' => 1,
                'observation' => 'Vicerrector',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 45,
                'estamento_id' => 2,
                'leveltype_id' => 9,
                'initials' => 'D003',
                'level' => 'Decano, Dir. Esc. Post Grado, Sec. Gral.',
                'activo' => 1,
                'observation' => 'Decano, Dir. Esc. Post Grado, Sec. Gral.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 46,
                'estamento_id' => 2,
                'leveltype_id' => 9,
                'initials' => 'D004',
                'level' => 'Dir. Esc. Profesional, Jefe Dep. Acad.',
                'activo' => 1,
                'observation' => 'Dir. Esc. Profesional, Jefe Dep. Acad.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
