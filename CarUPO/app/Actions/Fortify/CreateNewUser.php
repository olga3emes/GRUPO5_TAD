<?php

namespace App\Actions\Fortify;

use App\Models\Carrito_compra;
use App\Models\Favoritos;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'dni' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'language' => ['required', 'string'],
        ])->validate();

        // Create user
        $user = User::create([
            'dni' => $input['dni'],
            'name' => $input['name'],
            'surname' => $input['surname'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'language' => $input['language'],
        ]);

        // Create cart and assign it to the user
        $cart = new Carrito_compra();
        $cart->user()->associate($user);
        $cart->save();

        // Create favoritos and assign it to the user
        $favoritos = new Favoritos();
        $favoritos->user()->associate($user);
        $favoritos->save();

        return $user;
    }
}
