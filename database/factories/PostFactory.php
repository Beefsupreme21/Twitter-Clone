<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstName(),
            'handle' => fake()->firstName(),
            'replies' => fake()->numberBetween(1,20),
            'retweets' => fake()->numberBetween(1,20),
            'likes' => fake()->numberBetween(1,20),
            'content' => fake()->paragraph(),
        ];
    }
}
