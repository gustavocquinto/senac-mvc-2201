<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutosVenda extends Model
{
    use HasFactory;
    protected $fillable = ['venda_id', 'produto_id', 'quantidade', 'valor'];

    protected $table = 'ProdutosVenda';
}
