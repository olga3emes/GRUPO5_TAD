<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto_categoria;



class Categoria extends Model
{
    use HasFactory;

    public function productos_categorias()
    {
        return $this->hasMany(Producto_categoria::class, 'fk_categoria_id');
    }
}
