<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea_compra extends Model
{
    use HasFactory;

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'id');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id');
    }
}
