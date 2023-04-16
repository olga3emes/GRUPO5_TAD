<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Favorito_producto;



class Favoritos extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'fk_user');
    }

    public function favoritos_productos()
    {
        return $this->hasMany(Favorito_producto::class, 'fk_favorito_id');
    }
}
