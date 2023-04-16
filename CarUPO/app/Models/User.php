<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Compra;
use App\Models\Carrito_compra;
use App\Models\Favoritos;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Aqui indico los campos a añadir del formulario de registro de usuario
    protected $fillable = [
        'dni',
        'name',
        'surname',
        'phone',
        'email',
        'password',
        'language',


    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the compras for the user.
     */
    public function compras()
    {
        return $this->hasMany(Compra::class, 'fk_user');
    }

    public function carritoCompra()
    {
        return $this->hasMany(Carrito_compra::class, 'fk_user');
    }

    public function favoritos()
    {
        return $this->hasMany(Favoritos::class, 'fk_user');
    }

    public function isAdmin(): bool
    {
        return (bool) $this->admin;
    }
}
