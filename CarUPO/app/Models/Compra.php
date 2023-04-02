<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    #public function linea_compras()
    #{
    #    return $this->hasOne(Linea_compra::class, 'id', 'fk_compra_id');
    #}
}
