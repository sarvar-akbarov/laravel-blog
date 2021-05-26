<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'user_id' => User::factory()->create(),
            'category_id' => Category::factory()->create(),
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->sentence(10),
            'body' => $this->faker->realText(500),
            'published_at' => now(),
        ];
    }
}
