<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'answer' => fake()->text(rand(100,200)),
            'user_id' => fake()->numberBetween(1,1000),
            'week_id' => fake()->numberBetween(1, 5),
            'question_id' => fake()->numberBetween(1, 25),
        ];
    }
}
