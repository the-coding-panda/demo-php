<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => fake()->name(),
            'surname' => fake()->name(),
            'address' => fake()->address(),
            'postcode' => fake()->randomNumber(),
            'favouriteColour' => fake()->randomElement(['Blue', 'Red', 'Green', 'Black', 'Brown'])
        ];
    }
}
