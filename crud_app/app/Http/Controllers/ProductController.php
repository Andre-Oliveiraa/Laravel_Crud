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
        $products = [
            [
                'id'                => 1, 
                'name_product'      => 'Camisa', 
                'mark'              => 'Nike', 
                'category'          => 'Vestuario', 
                'sale_value'        => 33.30, 
                'stock_quantity'    => 200
            ],

            [
                'id'                => 2, 
                'name_product'      => 'Bermuda', 
                'mark'              => 'Hello', 
                'category'          => 'Vestuario', 
                'sale_value'        => 55.25, 
                'stock_quantity'    => 150
            ]
        ];
        
        $productlist = array_column($products, 'name_product');
        return view("ListarProdutos", compact('products', 'productlist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('CadastrarProduto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
            'name_product'      => 'required',
            'mark'              => 'required',
            'category'          => 'required',
            'purchase_value'    => 'required',
            'sale_value'        => 'required',
            'stock_quantity'    => 'required',
        ]);

        Product::create($request -> all()); 
        return redirect()->route('products.index')->with('success', 'Produto criado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
