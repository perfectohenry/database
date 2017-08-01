<?php

use Illuminate\Database\Seeder;

class MasterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('master')->delete();
        
        \DB::table('master')->insert(array (
            0 => 
            array (
                'codigo' => 'AA0959',
                'name' => 'Name Example 1',
                'lastname' => 'Last Name Example 1',
                'lvlstudy' => 'Educación Universitaria Completa',
                'profession' => 'Ingeniero de Sistemas',
                'occupation' => 'Analista programador',
                'estamento_id' => 2,
                'docident_id' => 1,
                'docident_nmb' => '66132131',
                'lm' => NULL,
                'ruc' => '51132123132',
                'essalud' => '1213212FSDFS212',
                'banco_id' => 1,
                'account_id' => 1,
                'account_nmb' => '879845465321321213',
                'cci' => '32132132132132132132',
                'life_insurance' => 1,
                'ent_id' => 1,
                'seg_id' => 1,
                'disability' => 1,
                'discp_id' => 2,
                'did' => '65498-4656',
                'syndicated' => 1,
                'name_union' => 'Nombre de Algún Sindicato',
                'regpen_id' => 4,
                'cuspp' => '654561CXXVX2',
                'since' => '2017-07-19',
                'until' => '2017-07-25',
                'number_license' => 'A546432132',
                'category_license' => 'A-1C',
                'sex' => 'Masculino',
                'civil_status' => 'Soltero',
                'blood_type' => 'O+',
                'birthdate' => '2017-07-04',
                'nationality' => 'Peruano',
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1789,
                'last_name' => 'Nombre del Comyugue',
                'birthdate1' => '2017-07-05',
                'datemarriage' => '2017-07-05',
                'dnicy' => '54654654',
                'marriage_certificate' => 'ABC-987654321',
                'employment' => 'Ocupacion de Ejemplo',
                'work_center' => 'Centro Laboral de Ejemplo',
                'phone' => '(321) 321-213',
                'cellphone' => '(879) 845-231',
                'email' => 'example@example.com',
                'vivepd' => 1,
                'apl_nmbp' => 'Nombre de Ejemplo Padre',
                'vivemd' => 1,
                'apl_nmbm' => 'Nombre de Ejemplo Madre',
                'created_at' => '2017-07-21 18:13:06',
                'updated_at' => '2017-07-21 18:13:06',
            ),
            1 => 
            array (
                'codigo' => 'AA7242',
                'name' => 'Anthony',
                'lastname' => 'Flores Llantoy',
                'lvlstudy' => 'Educación Universitaria Completa',
                'profession' => 'Ingeniero de Sistemas',
                'occupation' => 'Analista programador',
                'estamento_id' => 1,
                'docident_id' => 1,
                'docident_nmb' => '47839757',
                'lm' => NULL,
                'ruc' => '10478397572',
                'essalud' => '3453477HHHHH999',
                'banco_id' => 1,
                'account_id' => 1,
                'account_nmb' => '2121542121',
                'cci' => '6545621132',
                'life_insurance' => 1,
                'ent_id' => 1,
                'seg_id' => 1,
                'disability' => 1,
                'discp_id' => 1,
                'did' => '21541-2225',
                'syndicated' => 1,
                'name_union' => 'Nombre de Algún Sindicato',
                'regpen_id' => 3,
                'cuspp' => '542121SDFSS2',
                'since' => '2017-07-05',
                'until' => '2017-07-26',
                'number_license' => 'S123232323',
                'category_license' => 'A-1B',
                'sex' => 'Masculino',
                'civil_status' => 'Soltero',
                'blood_type' => 'O+',
                'birthdate' => '2017-07-12',
                'nationality' => 'Peruano',
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1789,
                'last_name' => 'Nombre del Comyugue',
                'birthdate1' => '2017-07-04',
                'datemarriage' => '2017-07-20',
                'dnicy' => '76422222',
                'marriage_certificate' => '5SDA56DA6DA5D',
                'employment' => 'Ocupacion de Ejemplo',
                'work_center' => 'Centro Laboral de Ejemplo',
                'phone' => '(052) 455-587',
                'cellphone' => '(956) 854-852',
                'email' => 'example@example.com',
                'vivepd' => 1,
                'apl_nmbp' => 'Nombre de Ejemplo Padre',
                'vivemd' => 1,
                'apl_nmbm' => 'Nombre de Ejemplo Madre',
                'created_at' => '2017-07-21 18:08:56',
                'updated_at' => '2017-07-21 18:08:56',
            ),
            2 => 
            array (
                'codigo' => 'AA8421',
                'name' => 'Name Example',
                'lastname' => 'Last Name Example',
                'lvlstudy' => 'Educación Universitaria Completa',
                'profession' => 'Ingeniero de Sistemas',
                'occupation' => 'Analista programador',
                'estamento_id' => 1,
                'docident_id' => 1,
                'docident_nmb' => '54875441',
                'lm' => NULL,
                'ruc' => '66459465212',
                'essalud' => '4551651DFDFS121',
                'banco_id' => 1,
                'account_id' => 1,
                'account_nmb' => '6598874516',
                'cci' => '6545455651',
                'life_insurance' => 1,
                'ent_id' => 1,
                'seg_id' => 1,
                'disability' => 1,
                'discp_id' => 2,
                'did' => '51121-6561',
                'syndicated' => 1,
                'name_union' => 'Nombre de Algún Sindicato',
                'regpen_id' => 3,
                'cuspp' => '351123ZXCZX1',
                'since' => '2017-07-11',
                'until' => '2017-07-26',
                'number_license' => 'A213213213',
                'category_license' => 'A-1C',
                'sex' => 'Masculino',
                'civil_status' => 'Soltero',
                'blood_type' => 'O+',
                'birthdate' => '2017-07-05',
                'nationality' => 'Peruano',
                'department_id' => 23,
                'province_id' => 187,
                'district_id' => 1789,
                'last_name' => 'Nombre del Comyugue',
                'birthdate1' => '2017-07-20',
                'datemarriage' => '2017-07-05',
                'dnicy' => '56451321',
                'marriage_certificate' => 'SDDFDFG5G1DF2G1D2F1G',
                'employment' => 'Ocupacion de Ejemplo',
                'work_center' => 'Centro Laboral de Ejemplo',
                'phone' => '(254) 216-112',
                'cellphone' => '(651) 613-213',
                'email' => 'example@example.com',
                'vivepd' => 1,
                'apl_nmbp' => 'Nombre de Ejemplo Padre',
                'vivemd' => 1,
                'apl_nmbm' => 'Nombre de Ejemplo Madre',
                'created_at' => '2017-07-21 18:11:04',
                'updated_at' => '2017-07-21 18:11:04',
            ),
        ));
        
        
    }
}
