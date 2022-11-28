<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('countries')->insert([
            'name'=> 'Bolivia'
        ]);
        DB::table('countries')->insert([
            'name'=> 'Brazil'
        ]);
        DB::table('countries')->insert([
            'name'=> 'Chile'
        ]);
        DB::table('countries')->insert([
            'name'=> 'China'
        ]);
        DB::table('countries')->insert([
            'name'=> 'Mexico'
        ]);
        DB::table('countries')->insert([
            'name'=> 'Estados Unidos'
        ]);
        DB::table('countries')->insert([
            'name'=> 'Canada'
        ]);
        DB::table('countries')->insert([
            'name'=> 'Colombia'
        ]);
        DB::table('countries')->insert([
            'name'=> 'Alemania'
        ]);
        DB::table('countries')->insert([
            'name'=> 'Taiwan'
        ]);        
    }
}
