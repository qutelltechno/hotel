<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoomCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->word,


            'slug' => uniqid(),
            'thumbnail' => $this->faker->imageUrl,
            'image' => $this->faker->imageUrl,
            'is_published' => $this->faker->boolean,
            'discrbution' => $this->faker->text,
        ];
    }
}