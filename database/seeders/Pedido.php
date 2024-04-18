<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pedido extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pedidos = [
            [
                'idCliente' => 1,
                'status' => 'em aberto',
                'valorTotal' => 150.00
            ],
            [
                'idCliente' => 1,
                'status' => 'em produção',
                'valorTotal' => 110.00
            ],
            [
                'idCliente' => 1,
                'status' => 'em rota de entrega',
                'valorTotal' => 120.00
            ],
            [
                'idCliente' => 1,
                'status' => 'pronto para retirada',
                'valorTotal' => 130.00
            ],
            [
                'idCliente' => 1,
                'status' => 'finalizado',
                'valorTotal' => 150.00
            ],
        ];
        foreach ($pedidos as $pedidos) {
            DB::table('pedidos')->insert([
                'idCliente' => $pedidos['idCliente'],
                'status' => $pedidos['status'],
                'valorTotal' => $pedidos['valorTotal'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
