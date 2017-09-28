<?php

use Illuminate\Database\Seeder;

class MotivoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('motivo')->delete();
        
        \DB::table('motivo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Comisión de servicios',
                'estado' => 1,
                'created_at' => '2017-08-31 00:00:00',
                'updated_at' => '2017-08-31 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Salud',
                'estado' => 1,
                'created_at' => '2017-09-01 00:00:00',
                'updated_at' => '2017-09-01 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'Personal',
                'estado' => 1,
                'created_at' => '2017-09-01 00:00:00',
                'updated_at' => '2017-09-01 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => 'Particular',
                'estado' => 1,
                'created_at' => '2017-09-01 00:00:00',
                'updated_at' => '2017-09-01 00:00:00',
            ),
        ));
        
        
    }
}