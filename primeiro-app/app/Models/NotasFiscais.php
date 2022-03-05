<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotasFiscais extends Model
{
    use HasFactory;
    protected $fillable = ['venda_id', 'valor', 'imposto'];

    protected $table = 'NotasFiscais';

    function venda(){
        return $this->hasOne(NotasFiscais::class, 'id');
    }
}
