@extends('Layouts.main')
@section('content')
    @if (session('success'))
        <div class="alert alert-success mt-1">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-error mt-1">
            {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <h1 class="text-center m-5">Cadastro de Produto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('produtos.criar') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nomeProduto" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" id="nomeProduto" name="nome_produto" value="{{old('nome_produto')}}">
            </div>
            <div class="mb-3">
                <label for="codigoProduto" class="form-label">Código do produto</label>
                <input type="number" class="form-control" id="codigoProduto" name="codigo_produto" value="{{old('codigo_produto')}}>
            </div>
            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Descrição do produto</label>
                <textarea class="form-control" name="descricao_produto" id="descricaoProduto">{{old('descricao_produto')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="precoProduto" class="form-label">Preço do produto</label>
                <input type="number" class="form-control" id="precoProduto" name="preco_produto" value="{{old('preco_produto')}}">
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>
@endsection
