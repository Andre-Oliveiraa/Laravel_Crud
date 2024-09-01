@extends('layout.mainLayout')

@section('title', 'Larvel CRUD')

@section('content')
<p>
    Pagina Inicial
</p>
<div class='flex flex-row gap-3 items-center mt-3'>
    <button class='p-2 bg-zinc-600 text-zinc-100 rounded-lg hover:bg-zinc-100 hover:text-zinc-700 transition-all'>
        Home
    </button>
    <a href="{{ url('/products/create') }}">
        <button class='p-2 bg-zinc-600 text-zinc-100 rounded-lg hover:bg-zinc-100 hover:text-zinc-700 transition-all'>
            Cadastrar Produtos
        </button>
    </a>
    <a href="{{ url('/products') }}">
        <button class='p-2 bg-zinc-600 text-zinc-100 rounded-lg hover:bg-zinc-100 hover:text-zinc-700 transition-all'>
            Listar Produtos
        </button>
    </a>
</div>
@endsection