@extends('Layouts.main')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <h1 class="text-center m-5">Meus Produtos</h1>
        <div class="tabela_produtos">
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">Código Produto</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th class="text-center" scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($produtos) >= 1)
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->codigo_produto }}</td>
                                <td>{{ $produto->nome_produto }}</td>
                                <td>{{ $produto->descricao_produto }}</td>
                                <td>{{ $produto->preco_produto }},00</td>
                                <td class="text-center">
                                    <div class="mb-1">
                                        <a class="btn btn-primary btn-editar-produto" href="{{ route('produtos.ver', $produto->id) }}">Ver</a>
                                    </div>
                                    <div class="">
                                        <form action="{{ route('produtos.deletar', $produto->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-excluir-produto">Excluir</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text center">
                            <td colspan="5 centers">Náo existe produtos cadastrados</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
