<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $gender = $this->faker->randomElement(['male', 'female']);

           return [
            'nome' => $this->faker->name($gender),
            'email' => $this->faker->unique()->safeEmail,
            'sexo' => $gender,
            'pais' => $this->faker->countryCode
        ];
    }
}
