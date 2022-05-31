<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restriccion;

class RestriccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restriccion::create([
            //'id' => '1',
            'nombre' => 'Vegano',
            'descripcion' => 'Platos que no contienen derivados de animales'
        ]);

        Restriccion::create([
            //'id' => '2',
            'nombre' => 'Celiaco',
            'descripcion' => 'Platos que solo contienen alimentos sin TACC'
        ]);
    }
}
