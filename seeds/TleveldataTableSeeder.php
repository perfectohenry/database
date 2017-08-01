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
                'initials' => 'SPA',
                'level' => 'Servidor Profesional A',
                'observation' => 'Servidor Profesional A',
                'created_at' => '2017-07-14 15:03:57',
                'updated_at' => '2017-07-14 18:24:28',
            ),
            1 => 
            array (
                'id' => 2,
                'estamento_id' => 1,
                'initials' => 'SPB',
                'level' => 'Servidor Profesional B',
                'observation' => 'Servidor Profesional B',
                'created_at' => '2017-07-14 15:04:15',
                'updated_at' => '2017-07-14 15:08:18',
            ),
            2 => 
            array (
                'id' => 3,
                'estamento_id' => 1,
                'initials' => 'SPC',
                'level' => 'Servidor Profesional C',
                'observation' => 'Servidor Profesional C',
                'created_at' => '2017-07-14 15:04:36',
                'updated_at' => '2017-07-14 15:08:32',
            ),
            3 => 
            array (
                'id' => 4,
                'estamento_id' => 1,
                'initials' => 'SPD',
                'level' => 'Servidor Profesional D',
                'observation' => 'Servidor Profesional D',
                'created_at' => '2017-07-14 15:04:52',
                'updated_at' => '2017-07-14 15:09:19',
            ),
            4 => 
            array (
                'id' => 5,
                'estamento_id' => 1,
                'initials' => 'SPE',
                'level' => 'Servidor Profesional E',
                'observation' => 'Servidor Profesional E',
                'created_at' => '2017-07-14 15:05:06',
                'updated_at' => '2017-07-14 15:09:33',
            ),
            5 => 
            array (
                'id' => 6,
                'estamento_id' => 1,
                'initials' => 'STA',
                'level' => 'Servidor Tecnico A',
                'observation' => 'Servidor Tecnico A',
                'created_at' => '2017-07-14 15:05:26',
                'updated_at' => '2017-07-14 15:05:26',
            ),
            6 => 
            array (
                'id' => 7,
                'estamento_id' => 1,
                'initials' => 'STB',
                'level' => 'Servidor Tecnico B',
                'observation' => 'Servidor Tecnico B',
                'created_at' => '2017-07-14 15:05:46',
                'updated_at' => '2017-07-14 15:05:46',
            ),
            7 => 
            array (
                'id' => 8,
                'estamento_id' => 1,
                'initials' => 'STC',
                'level' => 'Servidor Tecnico C',
                'observation' => 'Servidor Tecnico C',
                'created_at' => '2017-07-14 15:06:05',
                'updated_at' => '2017-07-14 15:06:05',
            ),
            8 => 
            array (
                'id' => 9,
                'estamento_id' => 1,
                'initials' => 'STD',
                'level' => 'Servidor Tecnico D',
                'observation' => 'Servidor Tecnico D',
                'created_at' => '2017-07-14 15:06:23',
                'updated_at' => '2017-07-14 15:06:23',
            ),
            9 => 
            array (
                'id' => 10,
                'estamento_id' => 1,
                'initials' => 'STE',
                'level' => 'Servidor Tecnico E',
                'observation' => 'Servidor Tecnico E',
                'created_at' => '2017-07-14 15:06:39',
                'updated_at' => '2017-07-14 15:06:39',
            ),
            10 => 
            array (
                'id' => 11,
                'estamento_id' => 1,
                'initials' => 'SAA',
                'level' => 'Servidor Auxiliar A',
                'observation' => 'Servidor Auxiliar A',
                'created_at' => '2017-07-14 15:10:51',
                'updated_at' => '2017-07-14 15:10:51',
            ),
            11 => 
            array (
                'id' => 12,
                'estamento_id' => 1,
                'initials' => 'SAB',
                'level' => 'Servidor Auxiliar B',
                'observation' => 'Servidor Auxiliar B',
                'created_at' => '2017-07-14 15:11:03',
                'updated_at' => '2017-07-14 15:11:03',
            ),
            12 => 
            array (
                'id' => 13,
                'estamento_id' => 1,
                'initials' => 'SAC',
                'level' => 'Servidor Auxiliar C',
                'observation' => 'Servidor Auxiliar C',
                'created_at' => '2017-07-14 15:11:16',
                'updated_at' => '2017-07-14 15:11:16',
            ),
            13 => 
            array (
                'id' => 14,
                'estamento_id' => 1,
                'initials' => 'SAD',
                'level' => 'Servidor Auxiliar D',
                'observation' => 'Servidor Auxiliar D',
                'created_at' => '2017-07-14 15:11:26',
                'updated_at' => '2017-07-14 15:11:26',
            ),
            14 => 
            array (
                'id' => 15,
                'estamento_id' => 1,
                'initials' => 'SAE',
                'level' => 'Servidor Auxiliar E',
                'observation' => 'Servidor Auxiliar E',
                'created_at' => '2017-07-14 15:11:36',
                'updated_at' => '2017-07-14 15:11:36',
            ),
            15 => 
            array (
                'id' => 16,
                'estamento_id' => 2,
                'initials' => 'PDE',
                'level' => 'Principal Dedicación Exclusiva',
                'observation' => 'Principal Dedicación Exclusiva',
                'created_at' => '2017-07-14 18:27:21',
                'updated_at' => '2017-07-14 18:27:21',
            ),
            16 => 
            array (
                'id' => 17,
                'estamento_id' => 2,
                'initials' => 'ADE',
                'level' => 'Asociado Dedicación Exclusiva',
                'observation' => 'Asociado Dedicación Exclusiva',
                'created_at' => '2017-07-14 18:28:01',
                'updated_at' => '2017-07-14 18:28:40',
            ),
            17 => 
            array (
                'id' => 19,
                'estamento_id' => 2,
                'initials' => 'XDE',
                'level' => 'Auxiliar Dedicación Exclusiva',
                'observation' => 'Auxiliar Dedicación Exclusiva',
                'created_at' => '2017-07-14 18:29:54',
                'updated_at' => '2017-07-14 18:29:54',
            ),
            18 => 
            array (
                'id' => 20,
                'estamento_id' => 2,
                'initials' => 'JDE',
                'level' => 'Jefe de Practicas Dedicación Exclusiva',
                'observation' => 'Jefe de Practicas Dedicación Exclusiva',
                'created_at' => '2017-07-14 18:32:05',
                'updated_at' => '2017-07-14 18:32:05',
            ),
            19 => 
            array (
                'id' => 21,
                'estamento_id' => 2,
                'initials' => 'PTC',
                'level' => 'Principal Tiempo Completo',
                'observation' => 'Principal Tiempo Completo',
                'created_at' => '2017-07-14 18:32:54',
                'updated_at' => '2017-07-14 18:32:54',
            ),
            20 => 
            array (
                'id' => 22,
                'estamento_id' => 2,
                'initials' => 'ATC',
                'level' => 'Asociado Tiempo Completo',
                'observation' => 'Asociado Tiempo Completo',
                'created_at' => '2017-07-14 18:33:20',
                'updated_at' => '2017-07-14 18:33:20',
            ),
            21 => 
            array (
                'id' => 23,
                'estamento_id' => 2,
                'initials' => 'XTC',
                'level' => 'Auxiliar Tiempo Completo',
                'observation' => 'Auxiliar Tiempo Completo',
                'created_at' => '2017-07-14 18:33:50',
                'updated_at' => '2017-07-14 18:33:50',
            ),
            22 => 
            array (
                'id' => 24,
                'estamento_id' => 2,
                'initials' => 'JTC',
                'level' => 'Jefe de Practicas Tiempo Completo',
                'observation' => 'Jefe de Practicas Tiempo Completo',
                'created_at' => '2017-07-14 18:34:13',
                'updated_at' => '2017-07-14 18:34:13',
            ),
            23 => 
            array (
                'id' => 25,
                'estamento_id' => 2,
                'initials' => 'P20',
                'level' => 'Principal 20',
                'observation' => 'Principal 20',
                'created_at' => '2017-07-14 18:34:42',
                'updated_at' => '2017-07-14 18:34:42',
            ),
            24 => 
            array (
                'id' => 26,
                'estamento_id' => 2,
                'initials' => 'P15',
                'level' => 'Principal 15',
                'observation' => 'Principal 15',
                'created_at' => '2017-07-14 18:35:33',
                'updated_at' => '2017-07-14 18:35:33',
            ),
            25 => 
            array (
                'id' => 27,
                'estamento_id' => 2,
                'initials' => 'P10',
                'level' => 'Principal 10',
                'observation' => 'Principal 10',
                'created_at' => '2017-07-14 18:35:52',
                'updated_at' => '2017-07-14 18:35:52',
            ),
            26 => 
            array (
                'id' => 29,
                'estamento_id' => 2,
                'initials' => 'A20',
                'level' => 'Asociado 20',
                'observation' => 'Asociado 20',
                'created_at' => '2017-07-14 18:36:42',
                'updated_at' => '2017-07-14 18:36:42',
            ),
            27 => 
            array (
                'id' => 30,
                'estamento_id' => 2,
                'initials' => 'A15',
                'level' => 'Asociado 15',
                'observation' => 'Asociado 15',
                'created_at' => '2017-07-14 18:37:00',
                'updated_at' => '2017-07-14 18:37:00',
            ),
            28 => 
            array (
                'id' => 31,
                'estamento_id' => 2,
                'initials' => 'A10',
                'level' => 'Asociado 10',
                'observation' => 'Asociado 10',
                'created_at' => '2017-07-14 18:37:16',
                'updated_at' => '2017-07-14 18:37:16',
            ),
            29 => 
            array (
                'id' => 32,
                'estamento_id' => 2,
                'initials' => 'X20',
                'level' => 'Auxiliar 20',
                'observation' => 'Auxiliar 20',
                'created_at' => '2017-07-14 18:37:38',
                'updated_at' => '2017-07-14 18:37:38',
            ),
            30 => 
            array (
                'id' => 33,
                'estamento_id' => 2,
                'initials' => 'X15',
                'level' => 'Auxiliar 15',
                'observation' => 'Auxiliar 15',
                'created_at' => '2017-07-14 18:37:55',
                'updated_at' => '2017-07-14 18:37:55',
            ),
            31 => 
            array (
                'id' => 34,
                'estamento_id' => 2,
                'initials' => 'X10',
                'level' => 'Auxiliar 10',
                'observation' => 'Auxiliar 10',
                'created_at' => '2017-07-14 18:39:34',
                'updated_at' => '2017-07-14 18:39:34',
            ),
            32 => 
            array (
                'id' => 35,
                'estamento_id' => 2,
                'initials' => 'J20',
                'level' => 'Jefe de Practicas 20',
                'observation' => 'Jefe de Practicas 20',
                'created_at' => '2017-07-14 18:39:53',
                'updated_at' => '2017-07-14 18:39:53',
            ),
            33 => 
            array (
                'id' => 36,
                'estamento_id' => 2,
                'initials' => 'J15',
                'level' => 'Jefe de Practicas 15',
                'observation' => 'Jefe de Practicas 15',
                'created_at' => '2017-07-14 18:40:10',
                'updated_at' => '2017-07-14 18:40:10',
            ),
            34 => 
            array (
                'id' => 37,
                'estamento_id' => 2,
                'initials' => 'J10',
                'level' => 'Jefe de Practicas 10',
                'observation' => 'Jefe de Practicas 10',
                'created_at' => '2017-07-14 18:41:34',
                'updated_at' => '2017-07-14 18:41:34',
            ),
        ));
        
        
    }
}
