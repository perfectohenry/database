<?php

use Illuminate\Database\Seeder;

class TformatodataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tformatodata')->delete();
        
        \DB::table('tformatodata')->insert(array (
            0 => 
            array (
                //'id' => '1',
                'formato' => 'D. J. de no Incompatibilidad para la Docencia Ordinaria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                //'id' => '2',
                'formato' => 'D. J. de no Incompatibilidad para la Docencia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                //'id' => '3',
                'formato' => 'D. J. de Compatibildiad para la Docencia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                //'id' => '4',
                'formato' => 'D. de Parantesco de Consanguinidad y Afinidad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                //'id' => '5',
                'formato' => 'D. J. de no poseer Antecedentes Penales',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                //'id' => '6',
                'formato' => 'D. J. de Datos Personales',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
