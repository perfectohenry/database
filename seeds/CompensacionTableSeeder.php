<?php

use Illuminate\Database\Seeder;

class CompensacionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('compensacion')->delete();
        
        \DB::table('compensacion')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Deducción de Vacaciones',
                'estado' => 1,
                'created_at' => '2017-09-01 00:00:00',
                'updated_at' => '2017-09-01 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Horas Extras',
                'estado' => 1,
                'created_at' => '2017-09-01 00:00:00',
                'updated_at' => '2017-09-01 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'Onomastico',
                'estado' => 1,
                'created_at' => '2017-09-01 00:00:00',
                'updated_at' => '2017-09-01 00:00:00',
            ),
        ));
        
        
    }
}