<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'also_called' => $this->faker->name(),
            'manufacturer' => $this->faker->company(),
            'color' => $this->faker->colorName(),
            'engine' => $this->faker->numberBetween(0, 5000),
            'release_date' => $this->faker->date(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(1, 0, 1000000),
        ];
    }
}
