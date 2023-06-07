<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // Nombre
            'content' => $this->faker->sentence(), // Frase
            'post_id' => function(){ // Función anónima para obtener el id de un post nuevo
                return Post::factory()->create(); // Se crea un post y se obtiene su id
            } 
        ];
    }
}
