<?php

use Illuminate\Database\Seeder;

class TemployeedataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('temployeedata')->delete();
        
        \DB::table('temployeedata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'estamento_id' => 1,
                'initials' => 'AC',
                'employee' => 'Administrativo Contratado',
                'observation' => 'Administrativo Contratado',
                'created_at' => '20170714 19:15:12',
                'updated_at' => '20170714 19:15:12',
            ),
            1 => 
            array (
                // 'id' => 2,
                'estamento_id' => 1,
                'initials' => 'AN',
                'employee' => 'Administrativo Nombrado',
                'observation' => 'Administrativo Nombrado',
                'created_at' => '20170714 19:16:16',
                'updated_at' => '20170714 19:16:16',
            ),
            2 => 
            array (
                // 'id' => 4,
                'estamento_id' => 1,
                'initials' => 'AP',
                'employee' => 'Administrativo Pensionista',
                'observation' => 'Administrativo Pensionista',
                'created_at' => '20170714 19:16:35',
                'updated_at' => '20170714 19:16:35',
            ),
            3 => 
            array (
                // 'id' => 5,
                'estamento_id' => 2,
                'initials' => 'DC',
                'employee' => 'Docente Contratado',
                'observation' => 'Docente Contratado',
                'created_at' => '20170714 19:17:18',
                'updated_at' => '20170714 19:17:18',
            ),
            4 => 
            array (
                // 'id' => 6,
                'estamento_id' => 2,
                'initials' => 'DN',
                'employee' => 'Docente Nombrado',
                'observation' => 'Docente Nombrado',
                'created_at' => '20170714 19:17:38',
                'updated_at' => '20170714 19:17:38',
            ),
            5 => 
            array (
                // 'id' => 7,
                'estamento_id' => 2,
                'initials' => 'DP',
                'employee' => 'Docente Pensionista',
                'observation' => 'Docente Pensionista',
                'created_at' => '20170714 19:17:54',
                'updated_at' => '20170714 19:17:54',
            ),
            6 => 
            array (
                // 'id' => 8,
                'estamento_id' => 1,
                'initials' => 'PF',
                'employee' => 'A plazo Fijo',
                'observation' => 'A plazo Fijo',
                'created_at' => '20170714 19:17:54',
                'updated_at' => '20170714 19:17:54',
            ),
        ));
        
        
    }
}
