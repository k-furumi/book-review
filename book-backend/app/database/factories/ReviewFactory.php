<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'user_id' => 1,
            'title' => $this->faker->realText(30, 1),
            'rate' => rand(0,5),
            'review' => $this->faker->realText(300,5),
        ];
    }
}
