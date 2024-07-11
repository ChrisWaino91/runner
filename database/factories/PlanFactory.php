<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->randomFloat(2, 0, 100);

        return [
            'name' => $this->faker->name,
            'level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'price' => $price,
            'sale_price' => 0.8 * $price,
            'short_description' => $this->faker->sentence,
            'long_description' => $this->faker->paragraph,
            'features' => [
                $this->faker->sentence,
                $this->faker->sentence,
                $this->faker->sentence,
                $this->faker->sentence,
            ],
        ];
    }
}
