<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favoritos;
use App\Models\Producto;

class Favorito_producto extends Model
{
    use HasFactory;

    public function favorito()
    {
        return $this->belongsTo(Favoritos::class, 'fk_favorito_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fk_producto_id');
    }
}
