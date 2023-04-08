<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Accesorio extends Model
{
    use HasFactory;

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fk_producto_id');
    }
}
