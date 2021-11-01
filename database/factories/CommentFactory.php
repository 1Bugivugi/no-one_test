<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_id' => Article::factory(),
            'theme' => $this->faker->sentence(),
            'body' => $this->faker->paragraph()
        ];
    }
}
