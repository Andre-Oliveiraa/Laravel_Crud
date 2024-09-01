<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    
    protected $fillabel = [
        'nome_produto',
        'marca',
        'categoria',
        'valor_comprar',
        'valor_venda',
        'qtd_estoque',
    ];
    
}
