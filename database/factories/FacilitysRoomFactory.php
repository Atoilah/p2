<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

class FacilitysRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'rooms_id' => $faker->numberBetween(1,3),
            'facility_rooms_id' => $faker->numberBetween(1,10),
        ];
    }
}
