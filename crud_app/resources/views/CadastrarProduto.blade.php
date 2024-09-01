@extends('layout.mainLayout')

@section('title', 'Create CRUD')

@section('content')
<a href="{{ url('/') }}">
    <button class='p-2 bg-zinc-600 text-zinc-100 rounded-lg hover:bg-zinc-100 hover:text-zinc-700 transition-all'>Voltar</button>
</a>
<div>
    <form action="{{ route('products.store') }}" method="post" class="flex flex-col gap-2 items-center text-zinc-800">
        @csrf
        <label for="name_product" class="text-zinc-100">
            Nome:
            <input type="text" name="name_product" required class="text-zinc-800"  id="name_product">
        </label>
        <label for="mark" class="text-zinc-100">
            Marca:
            <input type="text" name="mark" required class="text-zinc-800"  id="mark">
        </label>
        <label for="category" class="text-zinc-100">
            Categoria:
            <input type="text" name="category" required class="text-zinc-800"  id="category">
        </label>
        <label for="purchase_value" class="text-zinc-100">
            Valor de Comprar:
            <input type="number" name="purchase_value" required class="text-zinc-800"  id="purchase_value">
        </label>
        <label for="sale_value" class="text-zinc-100">
            Valor de Venda:
            <input type="number" name="sale_value" required class="text-zinc-800"  id="sale_value">
        </label>
        <label for="stock_quantity" class="text-zinc-100">
            Quantidade do Estoque:
            <input type="number" name="stock_quantity" required class="text-zinc-800"  id="stock_quantity">
        </label>
        <button type="submit" class='p-2 bg-zinc-600 text-zinc-100 rounded-lg hover:bg-zinc-100 hover:text-zinc-700 transition-all'>Enviar</button>
    </form>
</div>
@endsection