<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = [
            [
                'nome' => 'Matheus',
                'endereco' => 'testetsetsetesteetes',
                'telefone' => 1899814541,
                'email' => 'teste@gmail.com',
                'cpf' => 12345678901,
                'password' => '1010101010',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Matheus2',
                'endereco' => 'testetsetset12esteetes',
                'telefone' => 1899812541,
                'email' => 'teste2@gmail.com',
                'cpf' => 12312678901,
                'password' => '1010101010',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Matheus1',
                'endereco' => '11testetsetsetesteetes',
                'telefone' => 1199814541,
                'email' => 't32este@gmail.com',
                'cpf' => 31345678901,
                'password' => '121010101010',
                'imagem' => 'images/hamburgao.jpeg'
            ],
        ];
        foreach($cliente as $cliente) {
            DB::table('produtos')->insert([
                'nome' => $cliente['nome'],
                'endereco' => $cliente['endereco'],
                'telefone' => $cliente['telefone'],
                'email' => $cliente['email'],
                'cpf' => $cliente['cpf'],
                'password' => $cliente['password'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

