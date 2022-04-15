<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->word(),
            'modelo' => $this->faker->word(),
            'ram_qtd' => $this->faker->unique()->numberBetween(1000,8000),

        ];
    }
}
