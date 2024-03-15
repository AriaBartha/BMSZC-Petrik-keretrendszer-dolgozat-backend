<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Keyboard>
 */
class KeyboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->unique()->lexify('Keyboard-??????'),
            "type" => fake()->randomElement(['Gamer', 'Office use', 'Ergonomic', 'Flexible']),
            "layout" => fake()->randomElement(['QWERTZ', 'QWERTY', 'AZERTY']),
            "width" => fake()->randomFloat(1, 35, 45),
            "wireless" => fake()->randomElement(['yes', 'no'])
        ];
    }
}
