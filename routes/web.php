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
Route::post('/criar/produto', [ProdutosController::class, 'criarProduto'])->name('produtos.criar');
Route::get('/editar/{id}', [ProdutosController::class, 'verProduto'])->name('produtos.ver');
Route::put('/editar/produto/{id}', [ProdutosController::class, 'editarProduto'])->name('produto.editar');
Route::delete('/deletar/produto/{id}', [ProdutosController::class, 'deletaProduto'])->name('produtos.deletar');