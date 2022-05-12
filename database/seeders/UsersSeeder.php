<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name' => 'IAW',
            'email' => 'iaw@uns.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('iaw')
        ));
    }
}
