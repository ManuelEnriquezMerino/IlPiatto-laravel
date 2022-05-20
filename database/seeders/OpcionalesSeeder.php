<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Opcional;

class OpcionalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Opcional::create([
            'id' => '1',
            'plato_id' => '2',
            'nombre' => 'Papas fritas',
            'descripcion' => 'Porción mediana de papas fritas',
            'precio' => '500'
        ]);

        Opcional::create([
            'id' => '2',
            'plato_id' => '3',
            'nombre' => 'Extra croutons',
            'descripcion' => 'Abundantes croutons en la ensalada',
            'precio' => '300'
        ]);

        Opcional::create([
            'id' => '3',
            'plato_id' => '3',
            'nombre' => 'Aderezo extra',
            'descripcion' => 'Mayor cantidad de aderezo en la ensalada',
            'precio' => '150'
        ]);

        Opcional::create([
            'id' => '4',
            'plato_id' => '1',
            'nombre' => 'Extra salsa',
            'descripcion' => 'Mayor cantidad de salsa en las pastas',
            'precio' => '400'
        ]);
    }
}
