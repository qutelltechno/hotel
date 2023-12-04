<?php

namespace Database\Seeders;

use App\Models\RoomCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // RoomCategory::factory()->count(20)->create();
        RoomCategory::factory()->create([
            'name' => 'A single room has one single bed for single occupancy. An additional bed (called an extra bed) may be added to this room at a guests request and charged accordingly. The size of the bed is normally 3 feet by 6 feet. However, the concept of single rooms is vanishing nowadays. Mostly, hotels have twin or double rooms, and the charge for a single room is occupied by one person.',

        ]);

        RoomCategory::factory()->create([
            'name' => 'A double room has one single  2bed ',
        ]);

    }
}