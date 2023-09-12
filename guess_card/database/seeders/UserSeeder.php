<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Make sure this is here

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Nikola',
            'email' => 'nikola@nikola.com',
            'password' => bcrypt('nikola'),
        ]);
    }
}

