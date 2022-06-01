<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            //id=1
            'usuario' => 'Usuario de Prueba',
            'nombre' => 'NOMBRE',
            'apellido' => 'APELLIDO',
            'email' => 'iaw@uns.com',
            'nacimiento' => date('Y-m-d',775915200),
            'direccion' => 'San Andres 800'
        ]);
    }
}
