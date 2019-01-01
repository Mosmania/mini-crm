<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
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
            ['name'=>'Bedrijf 1', 'email'=>'bedrijf1@mosmania.nl', 'website'=>'bedrijf1.com'],
            ['name'=>'Bedrijf 2', 'email'=>'bedrijf2@mosmania.nl', 'website'=>'bedrijf2.com'],
            ['name'=>'Bedrijf 3', 'email'=>'bedrijf3@mosmania.nl', 'website'=>'bedrijf3.com'],
            ['name'=>'Bedrijf 4', 'email'=>'bedrijf4@mosmania.nl', 'website'=>'bedrijf4.com'],
            ['name'=>'Bedrijf 5', 'email'=>'bedrijf5@mosmania.nl', 'website'=>'bedrijf5.com'],
            ['name'=>'Bedrijf 6', 'email'=>'bedrijf6@mosmania.nl', 'website'=>'bedrijf6.com']
        ];

        DB::table('companies')->insert(array_values($collection) );
    }
}
