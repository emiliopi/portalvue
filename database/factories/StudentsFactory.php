<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'age' => fake()->numberBetween(1, 99),
            'father_name' => fake()->name(),
            'mother_name' => fake()->name(),
            'address' => fake()->address(),
            'student-code' => '',
        ];
    }
}
