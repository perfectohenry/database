<?php

use Illuminate\Database\Seeder;

class ContractsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contracts')->delete();
        
        \DB::table('contracts')->insert(array (
            0 => 
            array (
                // 'id' => '1',
                'master_code' => 'AA7242',
                'document_id' => '24',
                'doc_number' => '215487-17-RR/UNJBG',
                'docfile' => NULL,
                'doc_contract' => '326598-17-CTR/UNJBG',
                'contractfile' => NULL,
                'date_expedition' => '20170109',
                'since' => '20170102',
                'until' => '20170331',
                'duration' => '2 meses 30 dias',
                'years' => '0',
                'months' => '2',
                'days' => '30',
                'level_id' => '1',
                'position_id' => '3',
                'fundingsource_id' => '1',
                'contract_id' => '3',
                'location_id' => '14',
                'employee_id' => '1',
                'compo' => NULL,
                'canceled' => '0',
                'fiufie' => '1',
                'observation' => NULL,
                'created_at' => '20171228 09:48:45.000',
                'updated_at' => '20171228 09:48:45.000',
            ),
            1 => 
            array (
                // 'id' => '2',
                'master_code' => 'AA7242',
                'document_id' => '24',
                'doc_number' => '216587-17-RR/UNJBG',
                'docfile' => NULL,
                'doc_contract' => '985432-17-CTR/UNNJBG',
                'contractfile' => NULL,
                'date_expedition' => '20170410',
                'since' => '20170401',
                'until' => '20170630',
                'duration' => '3 meses',
                'years' => '0',
                'months' => '3',
                'days' => '0',
                'level_id' => '1',
                'position_id' => '3',
                'fundingsource_id' => '1',
                'contract_id' => '3',
                'location_id' => '14',
                'employee_id' => '1',
                'compo' => NULL,
                'canceled' => '0',
                'fiufie' => '0',
                'observation' => NULL,
                'created_at' => '20171228 09:49:49.000',
                'updated_at' => '20171228 09:49:49.000',
            ),
        ));
        
        
    }
}
