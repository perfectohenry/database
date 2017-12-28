<?php

use Illuminate\Database\Seeder;

class TleveltypedataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tleveltypedata')->delete();
        
        \DB::table('tleveltypedata')->insert(array (
            0 => 
            array (
                // 'id' => '1',
                'leveltype' => 'Funcionarios',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => '2',
                'leveltype' => 'Profesionales',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                // 'id' => '3',
                'leveltype' => 'Tecnicos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                // 'id' => '4',
                'leveltype' => 'Auxiliares',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                // 'id' => '5',
                'leveltype' => 'Directivos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                // 'id' => '6',
                'leveltype' => 'Principal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                // 'id' => '7',
                'leveltype' => 'Asociado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                // 'id' => '8',
                'leveltype' => 'Auxiliar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                // 'id' => '9',
                'leveltype' => 'Jefe de Practica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
