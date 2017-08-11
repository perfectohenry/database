<?php

use Illuminate\Database\Seeder;

class ThdiaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('thdia')->delete();
        
        \DB::table('thdia')->insert(array (
            0 => 
            array (
                'id' => 8,
                'dia' => 'Lunes',
                'entrada' => '07:45:00',
                'salida' => '15:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:30:50',
                'updated_at' => '2017-08-09 17:30:50',
            ),
            1 => 
            array (
                'id' => 9,
                'dia' => 'Martes',
                'entrada' => '07:45:00',
                'salida' => '15:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:30:50',
                'updated_at' => '2017-08-09 17:30:50',
            ),
            2 => 
            array (
                'id' => 10,
                'dia' => 'Miercoles',
                'entrada' => '07:45:00',
                'salida' => '15:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:30:50',
                'updated_at' => '2017-08-09 17:30:50',
            ),
            3 => 
            array (
                'id' => 11,
                'dia' => 'Jueves',
                'entrada' => '07:45:00',
                'salida' => '15:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:30:51',
                'updated_at' => '2017-08-09 17:30:51',
            ),
            4 => 
            array (
                'id' => 12,
                'dia' => 'Viernes',
                'entrada' => '07:45:00',
                'salida' => '15:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:30:51',
                'updated_at' => '2017-08-09 17:30:51',
            ),
            5 => 
            array (
                'id' => 13,
                'dia' => 'Domingo',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-09 17:30:51',
                'updated_at' => '2017-08-09 17:30:51',
            ),
            6 => 
            array (
                'id' => 14,
                'dia' => 'Sabado',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-09 17:30:51',
                'updated_at' => '2017-08-09 17:30:51',
            ),
            7 => 
            array (
                'id' => 15,
                'dia' => 'Lunes',
                'entrada' => '08:45:00',
                'salida' => '15:00:00',
                'totald' => '06:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:54:18',
                'updated_at' => '2017-08-09 17:54:18',
            ),
            8 => 
            array (
                'id' => 16,
                'dia' => 'Martes',
                'entrada' => '08:45:00',
                'salida' => '15:00:00',
                'totald' => '06:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:54:18',
                'updated_at' => '2017-08-09 17:54:18',
            ),
            9 => 
            array (
                'id' => 17,
                'dia' => 'Miercoles',
                'entrada' => '08:45:00',
                'salida' => '15:00:00',
                'totald' => '06:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:54:18',
                'updated_at' => '2017-08-09 17:54:18',
            ),
            10 => 
            array (
                'id' => 18,
                'dia' => 'Jueves',
                'entrada' => '08:45:00',
                'salida' => '15:00:00',
                'totald' => '06:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:54:18',
                'updated_at' => '2017-08-09 17:54:18',
            ),
            11 => 
            array (
                'id' => 19,
                'dia' => 'Viernes',
                'entrada' => '08:45:00',
                'salida' => '15:00:00',
                'totald' => '06:15',
                'trabaja' => 1,
                'created_at' => '2017-08-09 17:54:18',
                'updated_at' => '2017-08-09 17:54:18',
            ),
            12 => 
            array (
                'id' => 20,
                'dia' => 'Domingo',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-09 17:54:18',
                'updated_at' => '2017-08-09 17:54:18',
            ),
            13 => 
            array (
                'id' => 21,
                'dia' => 'Sabado',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-09 17:54:18',
                'updated_at' => '2017-08-09 17:54:18',
            ),
            14 => 
            array (
                'id' => 22,
                'dia' => 'Lunes',
                'entrada' => '12:45:00',
                'salida' => '20:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:27:21',
                'updated_at' => '2017-08-10 18:27:21',
            ),
            15 => 
            array (
                'id' => 23,
                'dia' => 'Martes',
                'entrada' => '12:45:00',
                'salida' => '20:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:27:21',
                'updated_at' => '2017-08-10 18:27:21',
            ),
            16 => 
            array (
                'id' => 24,
                'dia' => 'Miercoles',
                'entrada' => '12:45:00',
                'salida' => '20:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:27:21',
                'updated_at' => '2017-08-10 18:27:21',
            ),
            17 => 
            array (
                'id' => 25,
                'dia' => 'Jueves',
                'entrada' => '12:45:00',
                'salida' => '20:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:27:21',
                'updated_at' => '2017-08-10 18:27:21',
            ),
            18 => 
            array (
                'id' => 26,
                'dia' => 'Viernes',
                'entrada' => '12:45:00',
                'salida' => '20:00:00',
                'totald' => '07:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:27:21',
                'updated_at' => '2017-08-10 18:27:21',
            ),
            19 => 
            array (
                'id' => 27,
                'dia' => 'Domingo',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-10 18:27:21',
                'updated_at' => '2017-08-10 18:27:21',
            ),
            20 => 
            array (
                'id' => 28,
                'dia' => 'Sabado',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-10 18:27:21',
                'updated_at' => '2017-08-10 18:27:21',
            ),
            21 => 
            array (
                'id' => 29,
                'dia' => 'Lunes',
                'entrada' => '06:30:00',
                'salida' => '13:30:00',
                'totald' => '07:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:36:43',
                'updated_at' => '2017-08-10 18:36:43',
            ),
            22 => 
            array (
                'id' => 30,
                'dia' => 'Martes',
                'entrada' => '06:30:00',
                'salida' => '13:30:00',
                'totald' => '07:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:36:43',
                'updated_at' => '2017-08-10 18:36:43',
            ),
            23 => 
            array (
                'id' => 31,
                'dia' => 'Miercoles',
                'entrada' => '06:30:00',
                'salida' => '13:30:00',
                'totald' => '07:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:36:43',
                'updated_at' => '2017-08-10 18:36:43',
            ),
            24 => 
            array (
                'id' => 32,
                'dia' => 'Jueves',
                'entrada' => '06:30:00',
                'salida' => '13:30:00',
                'totald' => '07:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:36:43',
                'updated_at' => '2017-08-10 18:36:43',
            ),
            25 => 
            array (
                'id' => 33,
                'dia' => 'Viernes',
                'entrada' => '06:30:00',
                'salida' => '13:30:00',
                'totald' => '07:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:36:44',
                'updated_at' => '2017-08-10 18:36:44',
            ),
            26 => 
            array (
                'id' => 34,
                'dia' => 'Domingo',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-10 18:36:44',
                'updated_at' => '2017-08-10 18:36:44',
            ),
            27 => 
            array (
                'id' => 35,
                'dia' => 'Sabado',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-10 18:36:44',
                'updated_at' => '2017-08-10 18:36:44',
            ),
            28 => 
            array (
                'id' => 36,
                'dia' => 'Lunes',
                'entrada' => '06:00:00',
                'salida' => '09:00:00',
                'totald' => '03:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:58',
                'updated_at' => '2017-08-10 18:43:58',
            ),
            29 => 
            array (
                'id' => 37,
                'dia' => 'Martes',
                'entrada' => '06:00:00',
                'salida' => '09:00:00',
                'totald' => '03:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:58',
                'updated_at' => '2017-08-10 18:43:58',
            ),
            30 => 
            array (
                'id' => 38,
                'dia' => 'Miercoles',
                'entrada' => '06:00:00',
                'salida' => '09:00:00',
                'totald' => '03:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:58',
                'updated_at' => '2017-08-10 18:43:58',
            ),
            31 => 
            array (
                'id' => 39,
                'dia' => 'Jueves',
                'entrada' => '06:00:00',
                'salida' => '09:00:00',
                'totald' => '03:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:58',
                'updated_at' => '2017-08-10 18:43:58',
            ),
            32 => 
            array (
                'id' => 40,
                'dia' => 'Viernes',
                'entrada' => '06:00:00',
                'salida' => '09:00:00',
                'totald' => '03:00',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:58',
                'updated_at' => '2017-08-10 18:43:58',
            ),
            33 => 
            array (
                'id' => 41,
                'dia' => 'Domingo',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-10 18:43:58',
                'updated_at' => '2017-08-10 18:43:58',
            ),
            34 => 
            array (
                'id' => 42,
                'dia' => 'Sabado',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-10 18:43:58',
                'updated_at' => '2017-08-10 18:43:58',
            ),
            35 => 
            array (
                'id' => 43,
                'dia' => 'Lunes',
                'entrada' => '16:30:00',
                'salida' => '20:45:00',
                'totald' => '04:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:58',
                'updated_at' => '2017-08-10 18:43:58',
            ),
            36 => 
            array (
                'id' => 44,
                'dia' => 'Martes',
                'entrada' => '16:30:00',
                'salida' => '20:45:00',
                'totald' => '04:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:59',
                'updated_at' => '2017-08-10 18:43:59',
            ),
            37 => 
            array (
                'id' => 45,
                'dia' => 'Miercoles',
                'entrada' => '16:30:00',
                'salida' => '20:45:00',
                'totald' => '04:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:59',
                'updated_at' => '2017-08-10 18:43:59',
            ),
            38 => 
            array (
                'id' => 46,
                'dia' => 'Jueves',
                'entrada' => '16:30:00',
                'salida' => '20:45:00',
                'totald' => '04:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:59',
                'updated_at' => '2017-08-10 18:43:59',
            ),
            39 => 
            array (
                'id' => 47,
                'dia' => 'Viernes',
                'entrada' => '16:30:00',
                'salida' => '20:45:00',
                'totald' => '04:15',
                'trabaja' => 1,
                'created_at' => '2017-08-10 18:43:59',
                'updated_at' => '2017-08-10 18:43:59',
            ),
            40 => 
            array (
                'id' => 48,
                'dia' => 'Domingo',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-10 18:43:59',
                'updated_at' => '2017-08-10 18:43:59',
            ),
            41 => 
            array (
                'id' => 49,
                'dia' => 'Sabado',
                'entrada' => '00:00:00',
                'salida' => '00:00:00',
                'totald' => '',
                'trabaja' => 0,
                'created_at' => '2017-08-10 18:43:59',
                'updated_at' => '2017-08-10 18:43:59',
            ),
        ));
        
        
    }
}