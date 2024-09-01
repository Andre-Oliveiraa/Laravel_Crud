@extends('layout.mainLayout')

@section('title', 'Products CRUD')

@section('content')
<a href="{{ url('/') }}">
    <button class='p-2 bg-zinc-600 text-zinc-100 rounded-lg hover:bg-zinc-100 hover:text-zinc-700 transition-all'>Voltar</button>
</a>
<div>
    <nav>
        <ul>
            <li>HOME</li>
            <li>LISTA PRODUTOS</li>
        </ul>
    </nav>
    <div>

        @if (Session::has('message'))
            <h2>{ !!Session::get('message') !! }</h2>
        @endif
        <hr>
        <ul>
            @foreach ($productlist as $productName)
                <li>{{ $productName }}</li>
            @endforeach
        </ul>

        <table>
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>ID</th>
                    <th>PREÇO</th>
                    <th>CATEGORIA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name_product'] }}</td>
                        <td>{{ $product['mark'] }}</td>
                        <td>{{ $product['category'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection