<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
            'nome_produto'      => 'required',
            'marca'             => 'required',
            'categoria'         => 'required',
            'valor_comprar'     => 'required',
            'valor_venda'       => 'required',
            'qtd_estoque'       => 'required'
        ]);

        Product::create($request->all());
        
        return redirect()->route('products.index')->with('success', 'Produto Cadastrado');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'nome_produto' => 'required',
            'marca' => 'required',
            'categoria' => 'required',
            'valor_comprar' => 'required',
            'valor_venda' => 'required',
            'qtd_estoque' => 'required'
        ]);

        Product::update($request->all());

        return redirect()->route('products.index')->with('success', 'Produto Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produto Excluido');

    }
}