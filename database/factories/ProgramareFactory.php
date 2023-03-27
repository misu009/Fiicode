<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProgramareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doctor_id' => fake()->randomElement([1, 2]),
            'pacient_id' => fake()->randomElement([1, 2]),
            'data' => fake()->dateTimeInInterval("", "2 weeks"),
            'importanta' => fake()->randomElement(['danger', 'warning', 'success']),
            'description' => fake()->text(),
        ];
    }
}
