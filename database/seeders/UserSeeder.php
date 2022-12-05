<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Gabriel de la Fuente',
            'email' => 'stormech@gmail.com',
            'password' => bcrypt('12345678'),

        ])->assignRole('admin');

        User::create([
            'name' => 'Francisco Zarzalejo',
            'email' => 'info@zarzalejomotor.com',
            'password' => bcrypt('12345678'),

        ])->assignRole('ceo');
    }
}
