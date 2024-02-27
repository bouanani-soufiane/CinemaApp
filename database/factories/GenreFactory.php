<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = ucwords($this->faker->unique()->words(2, true), ' ');
        $slug = Str::slug($name, '-');
        return [
            'name' => $name,
            'description' => fake()->sentence(),
            'slug' => $slug
        ];
    }
}
