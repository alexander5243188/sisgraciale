<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Denomination;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denomination::create([
        	//'type' => 'BILLETE',
            'type_id' => 1,
        	'value' => 200
        ]);
         Denomination::create([
        	//'type' => 'BILLETE',
            'type_id' => 1,
        	'value' => 100
        ]);
          Denomination::create([
        	//'type' => 'BILLETE',
            'type_id' => 1,
        	'value' => 50
        ]);
           Denomination::create([
        	//'type' => 'BILLETE',
            'type_id' => 1,
        	'value' => 20
        ]);
            Denomination::create([
        	//'type' => 'BILLETE',
            'type_id' => 1,
        	'value' => 10
        ]);             
              Denomination::create([
        	//'type' => 'MONEDA',
              'type_id' => 2,
        	'value' => 5
        ]);
              Denomination::create([
        	//'type' => 'MONEDA',
              'type_id' => 2,
        	'value' => 2
        ]);
              Denomination::create([
        	//'type' => 'MONEDA',
            'type_id' => 2,
        	'value' => 1
        ]);
            Denomination::create([
        	//'type' => 'MONEDA',
              'type_id' => 2,
        	'value' => 0.5
        ]);
            Denomination::create([
                  //'type' => 'MONEDA',
                  'type_id' => 2,
                  'value' => 0.2
            ]);
            Denomination::create([
                  //'type' => 'MONEDA',
                  'type_id' => 2,
                  'value' => 0.1
            ]);
              Denomination::create([
        	      //'type' => 'OTRO',
                    'type_id' => 3,
        	      'value' => 0
        ]);
    }
}

