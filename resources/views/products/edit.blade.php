@extends('layout.mainlayout')

@section('title', 'Create Page')

@section('content')
<h1>Adicionar Produto</h1>
<form action="{{ route('products.store') }}" method="post">
    @csrf
    @method('PUT')
    <label for="nome_produto">
        Nome:
        <input type="text" name="nome_produto" id="nome_produto" value="{{ $product->nome_produto }}" required>
    </label>
    <label for="marca">
        Marca:
        <input type="text" name="marca" id="marca" value="{{ $product->marca }}" required>
    </label>
    <label for="categoria">
        Categoria:
        <input type="text" name="categoria" id="categoria" value="{{ $product->categoria }}" required>
    </label>
    <label for="valor_comprar">
        Valor Comprar:
        <input type="number" name="valor_comprar" id="valor_comprar" value="{{ $product->valor_comprar }}" required step="0.1">
    </label>
    <label for="nome_produto">
        Valor Venda:
        <input type="number" name="nome_produto" id="nome_produto" value="{{ $product->valor_venda }}" required step="0.1">
    </label>
    <label for="qtd_estoque">
        QTD Estoque:
        <input type="text" name="qtd_estoque" id="qtd_estoque" value="{{ $product->qtd_estoque }}" required>
    </label>
    <button type="submit">Atualizar</button>
</form>
@endsection
