<?php

use Illuminate\Database\Seeder;

class TpositiondataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tpositiondata')->delete();
        
        \DB::table('tpositiondata')->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'estamento_id' => 1,
                'initials' => 'ACCG1',
                'position' => 'AC Cargo 1',
                'activo' => 1,
                'observation' => 'AC Cargo 1',
                'created_at' => '20170722 02:09:22',
                'updated_at' => '20170722 02:09:22',
            ),
            1 => 
            array (
                // 'id' => 3,
                'estamento_id' => 1,
                'initials' => 'ACCG2',
                'position' => 'AC Cargo 2',
                'activo' => 1,
                'observation' => 'AC Cargo 2',
                'created_at' => '20170722 02:10:05',
                'updated_at' => '20170722 02:10:05',
            ),
            2 => 
            array (
                // 'id' => 4,
                'estamento_id' => 1,
                'initials' => 'ACCG3',
                'position' => 'AC Cargo 3',
                'activo' => 1,
                'observation' => 'AC Cargo 3',
                'created_at' => '20170722 02:11:19',
                'updated_at' => '20170722 02:11:19',
            ),
            3 => 
            array (
                // 'id' => 5,
                'estamento_id' => 1,
                'initials' => 'ACCG4',
                'position' => 'AC Cargo 4',
                'activo' => 1,
                'observation' => 'AC Cargo 4',
                'created_at' => '20170722 02:11:53',
                'updated_at' => '20170722 02:11:53',
            ),
            4 => 
            array (
                // 'id' => 6,
                'estamento_id' => 1,
                'initials' => 'ACCG5',
                'position' => 'AC Cargo 5',
                'activo' => 1,
                'observation' => 'AC Cargo 5',
                'created_at' => '20170722 02:12:18',
                'updated_at' => '20170722 02:12:18',
            ),
        ));
        
        
    }
}
