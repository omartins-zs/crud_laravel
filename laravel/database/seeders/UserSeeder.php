<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    public function run(User $user)
    {
        $user->create([
            'name' => 'Gabriel Matheus',
            'email' => 'gabrielmatheus@teste.com',
            'password' => '12345678',
        ]);
        $user->create([
            'name' => 'Lucas Guimaraes',
            'email' => 'lucas@teste.com',
            'password' => '12345',
        ]);
        $user->create([
            'name' => 'Fernando Saga',
            'email' => 'fernandinhdo@teste.com',
            'password' => '123',
        ]);
    }
}
