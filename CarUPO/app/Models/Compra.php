<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,  'id');
    }

    public function lineas_de_compra()
    {
        return $this->hasMany(Linea_compra::class,  'id');
    }
}
