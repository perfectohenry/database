<?php

use Illuminate\Database\Seeder;

class TacademicdegreedataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tacademicdegreedata')->delete();
        
        \DB::table('tacademicdegreedata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'initials' => 'BACH',
                'academicdegree' => 'Bachiller',
                'reggradtpr' => 1,
                'observation' => 'Bachiller',
                'created_at' => '20170912 04:48:39',
                'updated_at' => '20170912 04:48:39',
            ),
            1 => 
            array (
                // 'id' => 2,
                'initials' => 'TITU',
                'academicdegree' => 'Titulo',
                'reggradtpr' => 0,
                'observation' => 'Titulo',
                'created_at' => '20170912 04:48:54',
                'updated_at' => '20170912 04:48:54',
            ),
            2 => 
            array (
                // 'id' => 3,
                'initials' => 'MGRT',
                'academicdegree' => 'Magister',
                'reggradtpr' => 1,
                'observation' => 'Magister',
                'created_at' => '20170912 04:49:10',
                'updated_at' => '20170912 04:49:10',
            ),
            3 => 
            array (
                // 'id' => 4,
                'initials' => 'DTR',
                'academicdegree' => 'Doctorado',
                'reggradtpr' => 1,
                'observation' => 'Doctorado',
                'created_at' => '20170912 04:49:23',
                'updated_at' => '20170912 04:49:59',
            ),
            4 => 
            array (
                // 'id' => 5,
                'initials' => 'SESP',
                'academicdegree' => 'Segunda Especialidad',
                'reggradtpr' => 0,
                'observation' => 'Segunda Especialidad',
                'created_at' => '20170912 04:49:37',
                'updated_at' => '20170912 04:49:37',
            ),
            5 => 
            array (
                // 'id' => 6,
                'initials' => 'CLGT',
                'academicdegree' => 'Colegiatura',
                'reggradtpr' => 0,
                'observation' => 'Colegiatura',
                'created_at' => '20170912 04:49:49',
                'updated_at' => '20170912 04:49:49',
            ),
        ));
        
        
    }
}
