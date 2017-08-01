<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        /*$user = factory(App\User::class)->create([
             'username' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('admin'),
             'lastname' => 'Mr',
             'firstname' => 'admin'
        ]);*/

        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
			      'lastname' => 'Admin',
			      'firstname' => 'Admin'
        ]);

        $this->call('TdepartmentdataTableSeeder');
        $this->call('TprovincedataTableSeeder');
        $this->call('TdistrictdataTableSeeder');
        $this->call('TestamentodataTableSeeder');
        $this->call('TleveldataTableSeeder');
        $this->call('TemployeedataTableSeeder');
        $this->call('TdocumentdataTableSeeder');
        $this->call('TfundingsourcedataTableSeeder');
        $this->call('TcontractdataTableSeeder');
        $this->call('TbancodataTableSeeder');
        $this->call('TaccountdataTableSeeder');
        $this->call('TregpendataTableSeeder');
        $this->call('TentsegdataTableSeeder');
        $this->call('TsegurodataTableSeeder');
        $this->call('TdiscpdataTableSeeder');
        $this->call('TdocidentdataTableSeeder');
        $this->call('MasterTableSeeder');
    }
}
