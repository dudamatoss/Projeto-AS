<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'descricao',
        'preco',
        'categoria_id'
    ];
    public function categoria()
    {
       return $this ->belongsTo(categoria::class);
    }
}
