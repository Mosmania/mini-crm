<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $collection = [
            ['first_name'=>'Jan',   'last_name'=>'Jansen',    'company_id'=> 1, 'email'=>'mw1@mosmania.nl', 'telephone'=>'1231231231'],
            ['first_name'=>'Piet',  'last_name'=>'Pietersen', 'company_id'=> 2, 'email'=>'mw2@mosmania.nl', 'telephone'=>'1231231231'],
            ['first_name'=>'Klaas', 'last_name'=>'Klaasen',   'company_id'=> 3, 'email'=>'mw3@mosmania.nl', 'telephone'=>'1231231231'],
            ['first_name'=>'Kees',  'last_name'=>'Keesen',    'company_id'=> 4, 'email'=>'mw4@mosmania.nl', 'telephone'=>'1231231231'],
            ['first_name'=>'Peter', 'last_name'=>'Petersen',  'company_id'=> 5, 'email'=>'mw5@mosmania.nl', 'telephone'=>'1231231231'],
            ['first_name'=>'Joop',  'last_name'=>'Jopie',     'company_id'=> 6, 'email'=>'mw6@mosmania.nl', 'telephone'=>'1231231231']
        ];

        DB::table('employees')->insert(array_values($collection) );
    }
}
