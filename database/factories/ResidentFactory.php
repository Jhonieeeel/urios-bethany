<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resident>
 */
class ResidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->lastName(),
            'last_name' => fake()->lastName(),
            'age' => fake()->numberBetween(5, 18),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'address' => fake()->address(),
            'contact_number' => fake()->phoneNumber(),
            'admitted_at' => fake()->date(),
            'clientele_category' => fake()->word(),
            'status' => fake()->randomElement(['Admitted', 'Discharged']),
            'profile' => 'images/chancellor.png',
        ];
    }
}
