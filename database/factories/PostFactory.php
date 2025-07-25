<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'content' => $this->faker->paragraph(),
            'published_at' => $this->faker->dateTimeThisMonth(max: now()),
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
