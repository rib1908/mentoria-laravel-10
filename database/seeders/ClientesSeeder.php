<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create ( [
            'nome' => 'Luiz Cláudio',
            'email'=> 'luiz@gmail.com',
            'endereco'=> 'Rua Paulo, numero 42, Centro Mesquita',
            'logradouro'=> 'Rua Paulo',
            'cep'=> '25551240',
            'bairro'=> 'Centro'
        ]

        );
    }
}
