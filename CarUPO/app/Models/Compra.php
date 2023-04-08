<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the compra.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'fk_user');
    }

    /**
     * Get the linea_compras for the compra.
     */
    public function lineas_de_compra()
    {
        return $this->hasMany(Linea_Compra::class, 'fk_compra_id');
    }
}
