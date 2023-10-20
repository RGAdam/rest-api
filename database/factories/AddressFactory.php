<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::doesnthave('addresses')->get()->random()->id,
            'street_name' => fake()->streetName(),
            'street_number' => fake()->numberBetween(1, 250),
            'zip' => fake()->numberBetween(3000, 8000),
            'city' => fake()->city(),
            'sibling_num' => fake()->numberBetween(0, 5),
        ];
    }
}
