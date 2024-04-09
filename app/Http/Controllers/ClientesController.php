<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index() {
        $clientes = Clientes::all();
        $clienteComImagem = $clientes->map(function($clientes){
            return [
                'nome' => $clientes->nome,
                'endereco' => $clientes->preco,
                'telefone' => $clientes->telefone,
                'email' => $clientes->email,
                'cpf' => $clientes->cpf,
                'password' => $clientes->password,
                'imagem' => asset('storage/' . $clientes->imagem)

            ];
        });
        return response()->json($clienteComImagem);
    }

    public function store(Request $request){
        $clienteData = $request->all();
        
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            $caminhoImagem = $imagem->storeAs('imagem/clientes', $nomeImagem, 'public');
            $clienteData['imagem'] = $caminhoImagem;
        }

        $clientes = Clientes::create($clienteData);
        return response()->json(['cliente'=>$clientes], 201);
    }
}

