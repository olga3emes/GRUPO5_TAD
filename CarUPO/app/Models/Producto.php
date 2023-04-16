<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accesorio;
use App\Models\Coche;
use App\Models\Linea_carrito;
use App\Models\Linea_compra;
use App\Models\Favorito_producto;
use App\Models\Producto_categoria;


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
        return $this->hasMany(Linea_carrito::class, 'fk_producto_id');
    }

    public function lineas_de_compra()
    {
        return $this->hasMany(Linea_compra::class, 'fk_producto_id');
    }

    public function favoritos_productos()
    {
        return $this->hasMany(Favorito_producto::class, 'fk_producto_id');
    }

    public function productos_categorias()
    {
        return $this->hasMany(Producto_categoria::class, 'fk_producto_id');
    }
}
