<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(RestriccionesSeeder::class);
        $this->call(PlatosSeeder::class);
        $this->call(OpcionalesSeeder::class);
    }
}
