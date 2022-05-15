<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plato;

class PlatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plato::create(array(
            'nombre' => 'Tallarines con salsa bolognesa',
            'descripcion' => 'Tallarines hechos a mano con salsa bolognesa a base de ingredientes organicos',
            'precio' => '1000'
        ));
    }
}
