<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accesorio;
use App\Models\Coche;

class Producto extends Model
{
    use HasFactory;

    public function accesorio()
    {
        return $this->hasOne(Accesorio::class, 'fk_producto_id', 'id');
    }

    public function coche()
    {
        return $this->hasOne(Coche::class, 'fk_producto_id', 'id');
    }

    public function lineas_de_carrito()
    {
        return $this->hasMany(LineaCarrito::class, 'fk_producto_id');
    }
    
    public function lineas_de_compra()
    {
        return $this->hasMany(LineaCompra::class, 'fk_producto_id');
    }
}
