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
        $plato = Plato::create([
            'id' => '1',
            'nombre' => 'Tallarines con salsa bolognesa',
            'descripcion' => 'Tallarines hechos a mano con salsa bolognesa a base de ingredientes organicos',
            'precio' => '1500'
        ]);
        $plato->categorias()->sync(2);

        $plato = Plato::create([
            'id' => '2',
            'nombre' => 'Bife de Cerdo',
            'descripcion' => 'Bife de Cerdo al grill',
            'precio' => '2000'
        ]);
        $plato->categorias()->sync(1);
        $plato->restricciones()->sync(2);

        $plato = Plato::create([
            'id' => '3',
            'nombre' => 'Ensalada Cesar',
            'descripcion' => 'Ensalada con lechuga, croutons, huevo, pollo, ajo y queso',
            'precio' => '1250'
        ]);

        $plato = Plato::create([
            'id' => '4',
            'nombre' => 'Pizza de mozzarella',
            'descripcion' => 'Pizza mediana de mozzarella',
            'precio' => '1300'
        ]);

        $plato = Plato::create([
            'id' => '5',
            'nombre' => 'Zapallo Relleno',
            'descripcion' => 'Zapallo ahuecado relleno con queso, champiñones, cebolla y carne',
            'precio' => '2000'
        ]);


        $plato = Plato::create([
            'id' => '6',
            'nombre' => 'Wok de vegetales',
            'descripcion' => 'Wok a base de fideos de arroz, cebolla, brocoli y salsa de soja',
            'precio' => '1700'
        ]);
        $plato->categorias()->sync(2);
        $plato->restricciones()->sync([1,2]);

        $plato = Plato::create([
            'id' => '7',
            'nombre' => 'Wok marino',
            'descripcion' => 'Wok a base de fideos de arroz, calamar, camaron, cebolla, puerro y morron',
            'precio' => '3000'
        ]);
        $plato->categorias()->sync(2);
        $plato->restricciones()->sync(2);
    }
}
