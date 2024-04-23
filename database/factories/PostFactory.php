<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'category_id' => rand(1, 5),
            'photo' => $this->faker->image(),
            'title' => $this->faker->sentence(),
            'text' => $this->faker->paragraph(),
        ];
    }
}
