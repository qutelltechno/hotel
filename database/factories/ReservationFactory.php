<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $checkinDate = $this->faker->dateTimeBetween('now', '+30 days');
        $checkoutDate = $this->faker->dateTimeBetween($checkinDate, $checkinDate->format('Y-m-d').' +5 days');

        return [
            'user_id' => rand(1, 3),
            'room_id' => Room::factory(),
            'checkin_date' => $checkinDate->format('Y-m-d'),
            'checkout_date' => $checkoutDate->format('Y-m-d'),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'canceled']),

        ];
    }
}