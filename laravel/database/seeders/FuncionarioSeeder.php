<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Funcionario;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    public function run(Funcionario $funcionario)
    {

        $funcionario->create([
            'Nome' => 'Thaigo',
        ]);

        $funcionario->create([
            'Nome' => 'Lucas Guard',
        ]);
    }
}
