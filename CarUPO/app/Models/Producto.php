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
        return $this->belongsTo(Accesorio::class, 'id');
    }
    public function coche()
    {
        return $this->belongsTo(Coche::class, 'id');
    }

    public function linea_compra()
    {
        return $this->hasMany(Linea_compra::class, 'id');
    }
}
