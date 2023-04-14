<?php

namespace Database\Factories;

use App\Models\Coche;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class CocheFactory extends Factory
{
    protected $model = Coche::class;

    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement(['Audi', 'BMW', 'Chevrolet', 'Dodge', 'Ferrari', 'Ford', 'Honda', 'Hyundai', 'Jaguar', 'Jeep', 'Kia', 'Lamborghini', 'Lexus', 'Mazda', 'Mercedes-Benz', 'Mitsubishi', 'Nissan', 'Peugeot', 'Porsche', 'Renault', 'Rolls-Royce', 'Subaru', 'Suzuki', 'Tesla', 'Toyota', 'Volkswagen', 'Volvo', 'Alfa Romeo', 'Cadillac', 'Chrysler']),
            'modelo' => $this->faker->randomElement(['A1', 'Clio', 'Corsa', 'Golf', 'Ibiza', 'Focus', 'Megane', 'Fiesta', 'Polo', 'Leon', 'Astra', 'Swift', 'Yaris', 'Sandero', 'C3', 'C4', 'C5', 'Civic', 'Accord', 'A4', 'A6', 'Passat', 'Octavia', 'Forte', 'Rio', 'Soul', 'Corolla', 'Camry', 'Versa', 'Sentra']),
            'color' => $this->faker->safeColorName,
            'combustible' => $this->faker->randomElement(['gasolina', 'diesel', 'híbrido', 'eléctrico']),
            'cilindrada' => $this->faker->randomFloat(2, 1, 6),
            'potencia' => $this->faker->randomFloat(2, 50, 500),
            'nPuertas' => $this->faker->randomElement([2, 3, 4]),
            'fk_producto_id' => $this,
        ];
    }
}
