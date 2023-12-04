<?php

namespace Database\Factories;

use App\Models\RoomCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [


            'title' => $this->faker->sentence,
            'slug' => uniqid(),
            'thumbnail' => $this->faker->imageUrl,
            'image' => $this->faker->imageUrl,
            'short_discrbution' => $this->faker->paragraph,
            'discrbution' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'beds'=>$this->faker->numberBetween(1,3),
            'is_published' => $this->faker->boolean,
            'is_discounted' => $this->faker->boolean,
            'room_category_id' => RoomCategory::factory(),
        ];

   }
}