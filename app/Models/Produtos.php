<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome_produto', 'codigo_produto', 'descricao_produto', 'preco_produto', 'created_at', 'updated_at'];

    use HasFactory;
}
