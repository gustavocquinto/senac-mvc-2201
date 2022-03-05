<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'cliente_id', 'vendedor_id','data_da_venda'
    ];

    protected $table = 'vendas';

    public function cliente(){
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function produtos(){
        return $this->hasMany(ProdutosVenda::class, 'venda_id', 'id');
    }

    public function notafiscal() {
        return $this->hasOne(NotasFiscais::class, 'venda_id');
    }

}


