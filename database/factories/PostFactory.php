<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
{
    return [
        'title' => $this->faker->realText(20),
        'body' => $this->faker->realText(200),
    ];
}
}
