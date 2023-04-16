<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
use App\Models\Categoria;


class Producto_categoria extends Model
{
    use HasFactory;

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fk_producto_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fk_categoria_id');
    }
}
