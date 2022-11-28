<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proveedors')->insert([
        	'name' => 'Importadora pradel',
        	'phone' => '67531400',
            'addres' => 'Avenida petrolera',
            'nit' =>'18021996',
            'email' => 'import-pradel@gmail.com',
            'description' => 'Cinta aislante, Electrodo chino mt12, Alambre de amarre',
            'department_id' => 3
        ]);
        DB::table('proveedors')->insert([
        	'name' => 'Empresa unipersonal de Alejandra',
        	'phone' => '67001453',
            'addres' => 'Calle moxos',
            'nit' =>'18021996',
            'email' => 'alejandra-import@gmail.com',
            'description' => 'Chapas Travex, Chapas Alianca',
            'department_id' => 3
        ]);
        DB::table('proveedors')->insert([
        	'name' => 'Empresa unipersonal IN',
        	'phone' => '70367531',
            'addres' => 'Calle santivañes',
            'nit' =>'18021996',
            'email' => 'ines452673@gmail.com',
            'description' => 'Electrodo Conarco, Electrodo chino mt12, Electrodo Bambozi',
            'department_id' => 4
        ]);
    }
}
