@extends('Layouts.main')
@section('content')
    <div class="container">
        <h1 class="text-center m-5">Editar Produto</h1>
        <form>
            @csrf
            <div class="mb-3">
              <label for="nomeProduto" class="form-label">Nome do produto</label>
              <input type="email" class="form-control" id="nomeProduto" name="nome_produto">
            </div>
            <div class="mb-3">
                <label for="codigoProduto" class="form-label">Código do produto</label>
                <input type="email" class="form-control" id="codigoProduto" name="codigo_produto">
            </div>
            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Descrição do produto</label>
                <textarea class="form-control" name="descricao_produto" id="descricaoProduto"></textarea>
            </div>
            <div class="mb-3">
                <label for="precoProduto" class="form-label">Preço do produto</label>
                <input type="number" class="form-control" id="precoProduto" name="preco_produto">
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </form>
    </div>
@endsection