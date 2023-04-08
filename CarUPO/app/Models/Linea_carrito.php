<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea_carrito extends Model
{
    use HasFactory;

    public function carrito_compra()
    {
        return $this->belongsTo(Carrito_compra::class, 'fk_carrito_id');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fk_producto_id');
    }
}
