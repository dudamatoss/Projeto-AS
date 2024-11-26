<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categoria extends Model
{
    
    protected $fillable = [
        'description'
        
    ];
    public function produto(): HasMany
    {
       return $this ->hasMany(Produto::class);
    }
}

