@extends('layout.mainlayout')

@section('title', 'Index Page')

@section('content')
    <a href="{{ route('products.index') }}">
        <button>Voltar</button>
    </a>
    <h1>Detalhes do Produto</h1>
    <ul>
        <li>ID: {{ $product->id }}</li>
        <li>Nome: {{ $product->nome_produto }}</li>
        <li>Marca: {{ $product->marca }}</li>
        <li>Categoria: {{ $product->categoria }}</li>
        <li>Valor Compra: {{ $product->valor_comprar }}</li>
        <li>Valor Venda: {{ $product->valor_venda }}</li>
        <li>QTD. Estoque: {{ $product->qtd_estoque }}</li>
    </ul>
@endsection
