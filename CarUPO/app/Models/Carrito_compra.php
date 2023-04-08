<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito_compra extends Model
{
    use HasFactory;

    public function linea_carrito()
    {
        return $this->hasMany(Linea_carrito::class);
    }
    public function user()
    {
        return $this->hasOne(User::class, 'fk_user');
    }
}
