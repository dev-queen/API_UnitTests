<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Freelancer>
 */
class FreelancerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

        'name' => $this->faker->name(),
        'price' => random_int(50, 500),
        'email' => $this->faker->email(),
        'phone' => $this->faker->phoneNumber()
        ];
    }
}
