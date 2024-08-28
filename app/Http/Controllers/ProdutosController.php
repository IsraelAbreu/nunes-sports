<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProdutoRequest;
use App\Http\Requests\StoreProdutoRequest;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function listarProdutos()
    {
        $produtos = Produtos::all();

        if (isset($produtos)) {
            return view('main.ListaProdutos', compact('produtos'));
        }
        
    }

    public function novoProduto()
    {
        return view('main.CriarProduto');
    }

    public function criarProduto(StoreProdutoRequest $request){

        if($request->all()){
            $produtoCriado = Produtos::create($request->all());

            if ($produtoCriado) {
               return redirect()->route('produtos.listar')->with('success', 'Produto cadastrado com sucesso!');
            } else {
                return redirect()->back()->with('error', 'Ocorreu um erro ao cadastrar o produto');
            }
        }
    }

    public function verProduto($idProduto)
    {
        $produto = Produtos::find($idProduto);
        
        if(isset($produto)){
            return view('main.EditarProduto', compact('produto'));
        } else {
            return redirect()->back()->with('error', 'Produto não localizado');
        }
    
    }

    public function editarProduto(EditProdutoRequest $request, $id){

        $produto = Produtos::find($id);

        if(isset($produto)){
            $produto->update($request->all());

            return redirect()->route('produtos.listar')->with('success', 'Produto atualizado com sucesso!');
        } else {
                return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar o produto');
         }
    }



    public function deletaProduto($idProduto)
    {
        $produto = Produtos::find($idProduto);

        if(isset($produto)){
            $produto->delete();
            return redirect()->back()->with('success', 'Produto deletado com sucesso!');
        }
    }
}
