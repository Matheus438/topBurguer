<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produtos/index', [ProdutoController::class, 'index']);

Route::post('/produtos', [ProdutoController::class, 'store']);

Route::get('/clientes', [ClientesController::class, 'index']);

Route::post('/clientes', [ClientesController::class, 'store']);