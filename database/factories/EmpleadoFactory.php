<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empleado;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'correo' => $this->faker->email(),
            'telefono' => $this->faker->randomNumber(8),
            'direccion' => $this->faker->address(),
            'id_municipio' => $this->faker->numberBetween(1, 262),
            'id_depto' => $this->faker->numberBetween(1, 14),
        ];
    }
}
