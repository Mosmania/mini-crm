<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        'name'=>'Wim Mosman',
        'email'=>'wim@mosmania.nl',
        'password'=>bcrypt('123'),
        'is_admin'=>1,
        ]);
    }
}
