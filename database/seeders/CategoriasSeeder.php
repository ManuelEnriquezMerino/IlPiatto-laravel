<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            //id=1
            'nombre' => 'Carnes',
            'descripcion' => 'Platos basados en distintos tipos de carnes'
        ]);

        Categoria::create([
            //id=2
            'nombre' => 'Pastas',
            'descripcion' => 'Platos basados en Pastas'
        ]);
    }
}
