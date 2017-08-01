<?php

use Illuminate\Database\Seeder;

class TaccountdataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taccountdata')->delete();
        
        \DB::table('taccountdata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'account' => 'Ahorro',
                'observation' => 'Ahorro',
                'created_at' => '2017-07-18 17:18:31',
                'updated_at' => '2017-07-18 17:18:51',
            ),
            1 => 
            array (
                'id' => 2,
                'account' => 'Cta. Cte',
                'observation' => 'Cuenta. Corriente',
                'created_at' => '2017-07-18 17:19:00',
                'updated_at' => '2017-07-18 17:19:17',
            ),
            2 => 
            array (
                'id' => 3,
                'account' => 'Debito',
                'observation' => 'Debito',
                'created_at' => '2017-07-18 17:19:25',
                'updated_at' => '2017-07-18 17:19:37',
            ),
            3 => 
            array (
                'id' => 4,
                'account' => 'Otro',
                'observation' => 'Otro',
                'created_at' => '2017-07-18 17:31:36',
                'updated_at' => '2017-07-18 17:31:36',
            ),
        ));
        
        
    }
}
