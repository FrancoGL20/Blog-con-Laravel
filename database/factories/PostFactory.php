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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), // Frase
            'excerpt' => $this->faker->paragraph(), // Párrafo
            'content' => $this->faker->paragraphs(3, true), // 3 párrafos en un solo string
        ];
    }
}
