@extends('layout.mainlayout')

@section('title', 'Index Page')

@section('content')
<a href="{{ url('/') }}">
    <button>Voltar</button>
</a>
<h1>Produtos</h1>
<a href="{{ route('products.create') }}">Adicionar Produto</a>
<table>
    <thead>
        <tr>    
            <th>ID</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Categoria</th>
            <th>Valor Compra</th>
            <th>Valor Venda</th>
            <th>QTD. Estoque</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nome_produto }}</td>
                <td>{{ $product->marca }}</td>
                <td>{{ $product->categoria }}</td>
                <td>{{ $product->valor_comprar }}</td>
                <td>{{ $product->valor_venda }}</td>
                <td>{{ $product->qtd_estoque }}</td>
                <td>
                    <a href="{{ route('products.show', $product) }}">Visualizar</a>
                    <a href="{{ route('products.edit', $product) }}">Editar</a>
                    <form action="{{ route('products.destroy', $product) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
