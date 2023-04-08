<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea_compra extends Model
{
    use HasFactory;

    /**
     * Get the producto that owns the linea_compra.
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fk_producto_id');
    }

    /**
     * Get the compra that owns the linea_compra.
     */
    public function compra()
    {
        return $this->belongsTo(Compra::class, 'fk_compra_id');
    }
}
