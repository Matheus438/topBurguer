<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoFormRequest;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function criarPedido(PedidoFormRequest $request)
    {
        $pedido = pedido::create([
            'idCliente' => $pedido->idCliente,
            'status' => $pedido->status,
            'valorTotal' => $pedido->valorTotal,
        ]);
        return response()->json([
            "succes" => true,
        "message" => "pedido cadastrado",
        "data" => $pedido
        ], 200);
        if (count($pedido) > 0) {
            return response()
        }
    }
}
