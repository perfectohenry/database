<?php

use Illuminate\Database\Seeder;

class TafectdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tafectdata')->delete();
        
        \DB::table('tafectdata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'initials' => 'UNI',
                'afect' => 'Universidad',
                'observation' => 'Universidad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'initials' => 'CAT',
                'afect' => 'Categoria',
                'observation' => 'Categoria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                // 'id' => 3,
                'initials' => 'EST',
                'afect' => 'Estado',
                'observation' => 'Estado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                // 'id' => 4,
                'initials' => 'U/C',
                'afect' => 'Universidad / Categoria',
                'observation' => 'Universidad / Categoria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                // 'id' => 5,
                'initials' => 'U/E',
                'afect' => 'Universidad / Estado',
                'observation' => 'Universidad / Estado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                // 'id' => 6,
                'initials' => 'E/C',
                'afect' => 'Estado / Categoria',
                'observation' => 'Estado / Categoria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                // 'id' => 7,
                'initials' => 'UEC',
                'afect' => 'Universidad / Estado / Categoria',
                'observation' => 'Universidad / Estado / Categoria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
