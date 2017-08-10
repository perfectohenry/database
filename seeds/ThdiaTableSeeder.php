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
        ));
        
        
    }
}