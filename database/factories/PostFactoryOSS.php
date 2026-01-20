<?php

namespace Database\Factories;

use App\Models\UserOSS;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostOSS>
 */
class PostFactoryOSS extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isPublished = fake()->boolean(70); // 70% probability of being published
        $content = fake()->paragraphs(fake()->numberBetween(3, 8), true);
        
        return [
            'user_id' => UserOSS::factory(),
            'title' => fake()->sentence(fake()->numberBetween(4, 10)),
            'content' => $content,
            'excerpt' => fake()->text(200),
            'views' => fake()->numberBetween(0, 10000),
            'category' => fake()->randomElement([
                'Tecnología', 
                'Ciencia', 
                'Deportes', 
                'Entretenimiento', 
                'Negocios', 
                'Salud', 
                'Educación',
                'Viajes',
                'Arte',
                'Política'
            ]),
            'published_at' => $isPublished ? fake()->dateTimeBetween('-1 year', 'now') : null,
            'is_published' => $isPublished,
        ];
    }

    /**
     * Indicate that the post should be published.
     */
    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => true,
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ]);
    }

    /**
     * Indicate that the post should be unpublished.
     */
    public function unpublished(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => false,
            'published_at' => null,
        ]);
    }

    /**
     * Indicate that the post should be popular (high views).
     */
    public function popular(): static
    {
        return $this->state(fn (array $attributes) => [
            'views' => fake()->numberBetween(5000, 50000),
        ]);
    }
}
