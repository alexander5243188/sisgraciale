<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alexander',
            'profile' => 'Admin',  
            'phone' => '70399918',       
            //'status' => 'ACTIVO',
            'status_id' => 1, //---------------------------------------> LUEGO LO CAMBIAS AL AÑADIR EL ESTADO
            'email' => 'alexander@yahoo.es',
            'password' => bcrypt('alexander'),
            'image' => '639631de7a976_.jpg'
        ]);
        User::create([
            'name' => 'Alejandra',
            //'profile' => 'Employee',
            'profile' => 'Vendedor',
            'phone' => '77436343',
            //'status' => 'ACTIVO',
            'status_id' => 1, //--------------------------> LUEGO LO CAMBIAS AL AÑADIR  EL ESTADO
            'email' => 'alejandra@yahoo.es',
            'password' => bcrypt('alejandra'),
            'image' => '631f4db111c6d _.jpg'
        ]);
        User::create([
            'name' => 'Graciela',
            //'profile' => 'Employee',
            'profile' => 'Vendedor',
            'phone' => '77436343',
            //'status' => 'ACTIVO',
            'status_id' => 1, //--------------------------> LUEGO LO CAMBIAS AL AÑADIR  EL ESTADO
            'email' => 'graciela@yahoo.es',
            'password' => bcrypt('graciela'),
            'image' => '639631afa64da_.jpg'
        ]);
        User::create([
            'name' => 'Nirvana',
            //'profile' => 'Employee',
            'profile' => 'Almacen',
            'phone' => '77467343',
            //'status' => 'ACTIVO',
            'status_id' => 1, //--------------------------> LUEGO LO CAMBIAS AL AÑADIR  EL ESTADO
            'email' => 'nirvana@yahoo.es',
            'password' => bcrypt('nirvana'),
            'image' => '639631f9c1957_.jpg'
        ]);      
    }
}
