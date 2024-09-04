@extends('layout.mainlayout')

@section('title', 'Home Page')

@section('content')
    <div class="p-3">
        <h1 class="text-1xl font-bold">
            DB APP CRUD
        </h1>
        <a href="{{ route('products.index') }}">
            <button>Projeto</button>
        </a>
    </div>
@endsection
