<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [ProdutosController::class, 'listarProdutos'])->name('produtos.listar');
Route::get('/criar', [ProdutosController::class, 'novoProduto'])->name('produtos.novo');
Route::get('/editar', [ProdutosController::class, 'verProduto'])->name('produtos.editar');

Route::post('/criar/produto', [ProdutosController::class, 'criarProduto'])->name('produto.criar');
Route::post('/editar/produto', [ProdutosController::class, 'editarProduto'])->name('produto.editar');
