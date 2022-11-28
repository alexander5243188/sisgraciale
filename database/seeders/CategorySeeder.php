<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              
        Category::create([
        	'name' => 'Brochas rodillos bandejas',
            'user_id' => 1,
            //'country_id' => 1,
        	'image' => '63770bd003a19_.jpg'
        ]);
        Category::create([
        	'name' => 'Cerraduras',
            'user_id' => 1,
            //'country_id' => 1,
        	'image' => '63770be04b9ed_.png'
        ]);
        
        Category::create([
        	'name' => 'Herramientas',
            'user_id' => 1,
            //'country_id' => 1,
        	'image' => '63770bebabb19_.png'
        ]);        
        Category::create([
        	'name' => 'Lijas pliegos y discos esmeril',
            'user_id' => 1,
            //'country_id' => 1,
        	'image' => '63770bf9e8bdd_.png'
        ]);
        Category::create([
        	'name' => 'Materiales de construcción',
            'user_id' => 1,
            //'country_id' => 1,
        	'image' => '63770c088a6ce_.jpg'
        ]);
        Category::create([
        	'name' => 'Materiales electricos',
            'user_id' => 1,
            //'country_id' => 1,
        	'image' => '63770c2f9e06f_.jpg'
        ]);
        Category::create([
        	'name' => 'Pinturas, pegamentos y accesorios',
            'user_id' => 1,
            //'country_id' => 1,
        	'image' => '63770c47503aa_.png'
        ]);
        Category::create([
        	'name' => 'Plomería',
            'user_id' => 1,
            //'country_id' => 1,
        	'image' => '63770c9fd6e97_.jpg'
        ]);
        Category::create([
        	'name' => 'Seguridad industrial',
            'user_id' => 1,
            //'country_id' => 1,
        	'image' => '63770cb1e9d40_.jpg'
        ]);

    }
}
