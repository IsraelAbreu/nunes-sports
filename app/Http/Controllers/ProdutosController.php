<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function listarProdutos()
    {
        return view('main.ListaProdutos');
    }

    public function novoProduto()
    {
        return view('main.CriarProduto');
    }

    public function verProduto()
    {
        return view('main.EditarProduto');
    }

    public function deletaProduto($idProduto)
    {

    }
}
