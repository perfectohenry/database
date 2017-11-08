<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('address')->delete();
        
        \DB::table('address')->insert(array (
            0 => 
            array (
                'id' => 2,
                'master_code' => 'AA7242',
                'addres' => 'Direccion de Domicilio 1',
                'addresp' => 'Direccion Procesal 1',
                'country_id' => 173,
                'city' => NULL,
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1780,
                'observation' => NULL,
                'created_at' => '2017-11-07 18:22:06',
                'updated_at' => '2017-11-07 18:22:06',
            ),
            1 => 
            array (
                'id' => 3,
                'master_code' => 'AA3319',
                'addres' => 'Dirección de Domicilio 2',
                'addresp' => 'Dirección Procesal 2',
                'country_id' => 173,
                'city' => NULL,
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1780,
                'observation' => NULL,
                'created_at' => '2017-11-07 18:42:06',
                'updated_at' => '2017-11-07 18:42:06',
            ),
            2 => 
            array (
                'id' => 4,
                'master_code' => 'AM0377',
                'addres' => 'Dirección de Domicilio 3',
                'addresp' => 'Dirección Procesal 3',
                'country_id' => 173,
                'city' => NULL,
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1780,
                'observation' => NULL,
                'created_at' => '2017-11-07 18:44:20',
                'updated_at' => '2017-11-07 18:44:20',
            ),
            3 => 
            array (
                'id' => 5,
                'master_code' => 'BC5478',
                'addres' => 'Dirección de Domicilio 4',
                'addresp' => 'Dirección Procesal 4',
                'country_id' => 173,
                'city' => NULL,
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1780,
                'observation' => NULL,
                'created_at' => '2017-11-07 18:45:26',
                'updated_at' => '2017-11-07 18:45:26',
            ),
            4 => 
            array (
                'id' => 6,
                'master_code' => 'CG0309',
                'addres' => 'Dirección de Domicilio 5',
                'addresp' => 'Dirección Procesal 5',
                'country_id' => 173,
                'city' => NULL,
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1780,
                'observation' => NULL,
                'created_at' => '2017-11-07 18:47:01',
                'updated_at' => '2017-11-07 18:47:01',
            ),
        ));
        
        
    }
}
