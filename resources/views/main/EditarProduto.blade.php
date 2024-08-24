@extends('Layouts.main')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <h1 class="text-center m-5">Editar Produto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('produto.editar', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nomeProduto" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" id="nomeProduto" name="nome_produto"
                    value="{{ $produto->nome_produto }}">
            </div>
            <div class="mb-3">
                <label for="codigoProduto" class="form-label">Código do produto</label>
                <input type="number" class="form-control" id="codigoProduto" name="codigo_produto"
                    value="{{ $produto->codigo_produto }}">
            </div>
            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Descrição do produto</label>
                <textarea class="form-control" name="descricao_produto" id="descricaoProduto">{{ $produto->descricao_produto }}</textarea>
            </div>
            <div class="mb-3">
                <label for="precoProduto" class="form-label">Preço do produto</label>
                <input type="number" class="form-control" id="precoProduto" name="preco_produto"
                    value="{{ $produto->preco_produto }}">
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
        </form>
    </div>
@endsection
